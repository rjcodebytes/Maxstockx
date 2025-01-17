<?php

namespace App\Http\Controllers;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('admin.dashboard'); // Path to the admin dashboard blade file
    }

    public function manageuser()
    {
        $userModel = new User();
        $users = $userModel->getUsers();

        return view('admin.manageusers.manageusers', ['users' => $users]); // Path to the admin dashboard blade file
    }

    public function export(Request $request)
    {
        // Flash success message and return to the same page
        session()->flash('success', 'Data exported successfully!');
        return redirect()->back()->with('success', 'Data exported successfully!');
    }

    public function downloadExport(Request $request)
    {
        // Get all users
        $users = User::all();

        // Create new Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Set the active sheet and set column titles
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'User ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Username');
        $sheet->setCellValue('D1', 'Email');

        // Fill the data
        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user->user_id);
            $sheet->setCellValue('B' . $row, $user->name);
            $sheet->setCellValue('C' . $row, $user->username);
            $sheet->setCellValue('D' . $row, $user->email);
            $row++;
        }

        // Write the Excel file
        $writer = new Xlsx($spreadsheet);

        // Return the file for download
        $fileName = 'users.xlsx';
        $tempFilePath = storage_path('app/' . $fileName);

        $writer->save($tempFilePath);

        // Provide the download response with custom headers and delete the file after sending
        $response = response()->download($tempFilePath)
            ->deleteFileAfterSend(true);

        // Set content-type manually using the correct method
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        return $response;

    }
}
