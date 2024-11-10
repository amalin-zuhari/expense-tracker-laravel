<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;  // Import the Expense model
use Carbon\Carbon;       // Import Carbon for date handling

class ExpenseSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data
        Expense::create([
            'amount' => 100.00,
            'description' => 'Office supplies',
            'category' => 'Office',
            'expense_date' => Carbon::now()->subDays(5),
            'payment_method' => 'Credit Card',
        ]);

        Expense::create([
            'amount' => 50.75,
            'description' => 'Client lunch',
            'category' => 'Meals & Entertainment',
            'expense_date' => Carbon::now()->subDays(2),
            'payment_method' => 'Cash',
        ]);

        Expense::create([
            'amount' => 200.00,
            'description' => 'Travel expenses',
            'category' => 'Travel',
            'expense_date' => Carbon::now()->subDays(10),
            'payment_method' => 'Bank Transfer',
        ]);
    }
}
