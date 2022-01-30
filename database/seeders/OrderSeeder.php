<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()




    {
        //
        DB::table('customer_order')->insert([
            [
            'id'=> '1',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-01-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-01-01 05:20:55.000000',
            'updated_at'=> '2021-01-01 05:20:55.000000',
        ],
       
        [
            'id'=> '2',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-01-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-01-02 05:20:55.000000',
            'updated_at'=> '2021-01-02 05:20:55.000000',
        ],
        [
            'id'=> '3',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-01-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-01-03 05:20:55.000000',
            'updated_at'=> '2021-01-03 05:20:55.000000',
        ],
        // 4
        [
            'id'=> '4',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-02-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-02-01 05:20:55.000000',
            'updated_at'=> '2021-02-01 05:20:55.000000',
        ],
       // 5
        [
            'id'=> '5',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-02-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-02-02 05:20:55.000000',
            'updated_at'=> '2021-02-02 05:20:55.000000',
        ],
        // 6
        [
            'id'=> '6',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-02-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-02-03 05:20:55.000000',
            'updated_at'=> '2021-02-03 05:20:55.000000',
        ], 
         // 7
         [
            'id'=> '7',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-03-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-03-01 05:20:55.000000',
            'updated_at'=> '2021-03-01 05:20:55.000000',
        ],
       // 8
        [
            'id'=> '8',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-03-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-03-02 05:20:55.000000',
            'updated_at'=> '2021-03-02 05:20:55.000000',
        ],
        // 9
        [
            'id'=> '9',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-03-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-03-03 05:20:55.000000',
            'updated_at'=> '2021-03-03 05:20:55.000000',
        ], 
         // 10
         [
            'id'=> '10',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-04-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-04-01 05:20:55.000000',
            'updated_at'=> '2021-04-01 05:20:55.000000',
        ],
       // 11
        [
            'id'=> '11',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-04-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '3.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-04-02 05:20:55.000000',
            'updated_at'=> '2021-04-02 05:20:55.000000',
        ],
        // 12
        [
            'id'=> '12',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-04-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-04-03 05:20:55.000000',
            'updated_at'=> '2021-04-03 05:20:55.000000',
        ], 
         // 13
         [
            'id'=> '13',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-05-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '7.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-05-01 05:20:55.000000',
            'updated_at'=> '2021-05-01 05:20:55.000000',
         ],
       // 14
        [
            'id'=> '14',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-05-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-05-02 05:20:55.000000',
            'updated_at'=> '2021-05-02 05:20:55.000000',
        ],
        // 15
        [
            'id'=> '15',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-05-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '6.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-05-03 05:20:55.000000',
            'updated_at'=> '2021-05-03 05:20:55.000000',
        ], 
         // 16
         [
            'id'=> '16',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-06-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '6.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-06-01 05:20:55.000000',
            'updated_at'=> '2021-06-01 05:20:55.000000',
        ],
       // 17
        [
            'id'=> '17',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-06-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-06-02 05:20:55.000000',
            'updated_at'=> '2021-06-02 05:20:55.000000',
        ],
        // 18
        [
            'id'=> '18',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-06-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-06-03 05:20:55.000000',
            'updated_at'=> '2021-06-03 05:20:55.000000',
        ],
         // 19
         [
            'id'=> '19',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-07-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-07-01 05:20:55.000000',
            'updated_at'=> '2021-07-01 05:20:55.000000',
        ],
       // 20
        [
            'id'=> '20',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-07-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-07-02 05:20:55.000000',
            'updated_at'=> '2021-07-02 05:20:55.000000',
        ],
        // 21
        [
            'id'=> '21',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-07-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-07-03 05:20:55.000000',
            'updated_at'=> '2021-07-03 05:20:55.000000',
        ],
         // 22
         [
            'id'=> '22',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-08-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-08-01 05:20:55.000000',
            'updated_at'=> '2021-08-01 05:20:55.000000',
        ],
       // 23
        [
            'id'=> '23',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-08-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-08-02 05:20:55.000000',
            'updated_at'=> '2021-08-02 05:20:55.000000',
        ],
        // 24
        [
            'id'=> '24',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-08-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-08-03 05:20:55.000000',
            'updated_at'=> '2021-08-03 05:20:55.000000',
        ],
         // 25
         [
            'id'=> '25',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-09-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-09-01 05:20:55.000000',
            'updated_at'=> '2021-09-01 05:20:55.000000',
        ],
       // 26
        [
            'id'=> '26',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-09-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '3.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-09-02 05:20:55.000000',
            'updated_at'=> '2021-09-02 05:20:55.000000',
        ],
        // 27
        [
            'id'=> '27',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-09-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-09-03 05:20:55.000000',
            'updated_at'=> '2021-09-03 05:20:55.000000',
        ],
         // 28
         [
            'id'=> '28',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-10-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-10-01 05:20:55.000000',
            'updated_at'=> '2021-10-01 05:20:55.000000',
        ],
       // 29
        [
            'id'=> '29',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-10-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-10-02 05:20:55.000000',
            'updated_at'=> '2021-10-02 05:20:55.000000',
        ],
        // 30
        [
            'id'=> '30',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-10-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-10-03 05:20:55.000000',
            'updated_at'=> '2021-10-03 05:20:55.000000',
        ],
         // 31
         [
            'id'=> '31',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-11-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-11-01 05:20:55.000000',
            'updated_at'=> '2021-11-01 05:20:55.000000',
        ],
       // 32
        [
            'id'=> '32',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-11-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-11-02 05:20:55.000000',
            'updated_at'=> '2021-11-02 05:20:55.000000',
        ],
        // 33
        [
            'id'=> '33',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-11-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-11-03 05:20:55.000000',
            'updated_at'=> '2021-11-03 05:20:55.000000',
        ],
         // 34
         [
            'id'=> '34',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-01 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-12-01 05:20:55.000000',
            'updated_at'=> '2021-12-01 05:20:55.000000',
        ],
       // 35
        [
            'id'=> '35',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-02 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-12-02 05:20:55.000000',
            'updated_at'=> '2021-12-02 05:20:55.000000',
        ],
        // 36
        [
            'id'=> '36',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-03 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '3.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-12-03 05:20:55.000000',
            'updated_at'=> '2021-12-03 05:20:55.000000',
        ],
         // 37
         [
            'id'=> '37',
            'User_Id'=> '1',
            'O_Name'=> 'Nurul Lydia',
            'O_Street_1'=> 'No. 12, Jalan 18/22A, Taman Seri Serdang',
            'O_Postcode'=> '43300',
            'O_City'=> 'Serdang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'lydia@gmail.com',
            'O_Phone'=> '0104031234',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-04 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '4.50',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-12-04 05:20:55.000000',
            'updated_at'=> '2021-12-04 05:20:55.000000',
        ],
       // 38
        [
            'id'=> '38',
            'User_Id'=> '2',
            'O_Name'=> 'Lim Chong Heng',
            'O_Street_1'=> 'KM 3, Jalan Kebun',
            'O_Postcode'=> '43650',
            'O_City'=> 'Serdang',
            'O_State'=> 'Kajang',
            'O_Email'=> 'chonghg89@gmail.com',
            'O_Phone'=> '014-3456777',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-05 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-12-05 05:20:55.000000',
            'updated_at'=> '2021-12-05 05:20:55.000000',
        ],
        // 39
        [
            'id'=> '39',
            'User_Id'=> '3',
            'O_Name'=> 'Avinesh A/L Veloo',
            'O_Street_1'=> '13, Taman Dahlia, Taman Universiti',
            'O_Postcode'=> '40000',
            'O_City'=> 'Kajang',
            'O_State'=> 'Selangor',
            'O_Email'=> 'avi9@gmail.com',
            'O_Phone'=> '018-3346769',
            'O_Payment'=> 'Cash',
            'Datetime'=> '2021-12-06 05:20:55.000000',
            'T_Pax'=> '3',
            'O_Total_Price'=> '5.00',
            'O_Type'=> '10',
            'O_Status'=> '1',
            'Tracking_No'=> '1',
            'Remarks'=> 'Order',
            'created_at'=> '2021-02-06 05:20:55.000000',
            'updated_at'=> '2021-02-06 05:20:55.000000',
        ],
    ]);
}
}
