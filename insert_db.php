<?php
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error($link)));
mysqli_select_db($link, $db)or die(errorReport(mysqli_error($link)));
mysqli_query($link, "insert into Departments values (\"IT Department\",\"Sector 68\",\"IT-101\");");
mysqli_query($link, "insert into Departments values (\"Cardiology\",\"Sector 15\",\"CR-101\");");
mysqli_query($link, "insert into Departments values (\"Maternity\",\"Sector 23\",\"MT-101\");");
mysqli_query($link, "insert into Departments values (\"Neurology\",\"Sector 8\",\"NE-101\");");
mysqli_query($link, "insert into Departments values (\"Pharmacy\",\"Sector 5\",\"PH-101\");");
mysqli_query($link, "insert into Departments values (\"Orthopaedics\",\"Sector 1\",\"OR-101\",1);");
mysqli_query($link, "insert into Employee values (\"IT-101\",\"Andrew\",\"Delhi\",\"1987-01-02\",null,\"Male\",20000,null,\"IT-101\");");
mysqli_query($link, "insert into Employee values (\"CR-1001\",\"Mike\",\"Jaipur\",\"1984-09-02\",null,\"Male\",20000,null,\"CR-101\");");
mysqli_query($link, "insert into Employee values (\"CR-1002\",\"Avril\",\London\",\"1983-11-02\",null,\"Female\",20000,null,\"CR-101\");");
mysqli_query($link, "insert into Employee values (\"MT-2001\",\"Thomas\",\"UK\",\"1988-10-02\",null,\"Male\",20000,null,\"MT-101\");");
mysqli_query($link, "insert into Employee values (\"NE-3001\",\"Stefen\",\"New York\",\"1977-01-02\",null,\"Male\",20000,null,\"NE-101\");");
mysqli_query($link, "insert into Employee values (\"PH-4001\",\"Mary\",\"Delhi\",\"1969-02-02\",null,\"Female\",20000,null,\"PH-101\");");
mysqli_query($link, "insert into Employee values (\"PH-4002\",\"Eppes\",\"Delhi\",\"1976-03-02\",null,\"Male\",20000,null,\"PH-101\");");
mysqli_query($link, "insert into Employee values (\"MT-2002\",\"Ross\",\"Delhi\",\"1984-06-02\",null,\"Female\",20000,null,\"MT-101\");");
mysqli_query($link, "insert into Employee values (\"CR-1003\",\"David\",\"Delhi\",\"1980-06-02\",null,\"Male\",20000,null,\"CR-101\");");
mysqli_query($link, "insert into Employee values (\"IT-6802\",\"John\",\"Delhi\",\"19890-08-02\",null,\"Male\",20000,null,\"IT-101\");");
mysqli_query($link, "insert into Patients values (\"P001\",\"Charles Mathew\",\"Delhi\",\"1987-01-02\",null,\"Male\",\"B+\");");
mysqli_query($link, "insert into Patients values (\"P002\",\"Micheal Scofield\",\"New Delhi\",\"1988-04-02\",null,\"Male\",\"AB+\");");
mysqli_query($link, "insert into Patients values (\"P003\",\"Charles Mathew Scofield\",\"New Delhi\",\"1988-04-02\",null,\"Male\",\"AB+\");");
mysqli_query($link, "insert into Patients values (\"P004\",\"Peter Edward Scofield\",\"Jaipur\",\"1980-04-02\",null,\"Male\",\"A+\");");
mysqli_query($link, "insert into Patients values (\"P005\",\"Robert Brown\",\"Goa\",\"1980-08-22\",null,\"Male\",\"A-\");");
mysqli_query($link, "insert into Passwords values (\"ITS6801\",\"ITS6801\");");
mysqli_query($link, "insert into room values (\"Z1\",\"GEN\",\"0267\",2500.00,\"P005\");");
mysqli_query($link, "insert into room values (\"Z2\",\"PRI\",\"0141\",5000.00,\"P002\");");
mysqli_query($link, "insert into room values (\"Z3\",\"ICU\",\"0581\",2500.00,\"P001\");");
mysqli_query($link, "insert into room values (\"Z4\",\"ICU\",\"0582\",2500.00,\"P003\");");
mysqli_query($link, "insert into room values (\"Z5\",\"PRI\",\"0142\",2500.00,null);");
mysqli_query($link, "insert into room values (\"Z6\",\"GEN\",\"0268\",2500.00,null);");
mysqli_query($link, "insert into Room_Given values (\"Z1\",\"P005\",\"2013-03-31\",\"2013-04-30\");");
mysqli_query($link, "insert into Room_Given values (\"Z2\",\"P002\",\"2013-03-23\",\"2013-04-05\");");
mysqli_query($link, "insert into Room_Given values (\"Z3\",\"P003\",\"2013-04-15\",\"2013-04-17\");");
mysqli_query($link, "insert into vehicles values (\"Ambulance\",\"V1\",\"2012-09-01\",\"Maruti\",null,\"200\");");
mysqli_query($link, "insert into vehicles values (\"Ambulance\",\"V2\",\"2012-10-11\",\"Maruti\",null,\"200\");");
mysqli_query($link, "insert into vehicles values (\"Taxi\",\"V3\",\"2012-04-21\",\"Innova\",null,\"500\");");
mysqli_query($link, "insert into vehicles values (\"Taxi\",\"V4\",\"2013-01-01\",\"Indica\",null,\"500\");");
mysqli_query($link, "insert into vehicle_given values (\"V4\",\"P001\",\"2013-01-01\",\"2013-01-02\");");
mysqli_query($link, "insert into vehicle_given values (\"V2\",\"ITS6801\",\"2012-11-10\",\"2012-11-13\");");
mysqli_query($link, "insert into vehicle_given values (\"V3\",\"P005\",\"2012-12-04\",\"2012-12-06\");");
mysqli_query($link, "insert into medical_report values (\"P005\",\"R001\",\"2013-03-12\",\"\",\"Z1\",\"Non oily\",1230.50);");
mysqli_query($link, "insert into medical_report values (\"P002\",\"R003\",\"2013-03-21\",\"\",\"Z2\",\"Sugar Free\",230.50);");
mysqli_query($link, "insert into medical_report values (\"P003\",\"R002\",\"2013-03-30\",\"\",\"Z3\",\"Non oily\",2230.50);");
mysqli_query($link, "insert into diagnosis values (\"2013-03-21\",\"Blood Test\",\"AB+\",\"R003\",100.00);");
mysqli_query($link, "insert into diagnosis values (\"2013-04-01\",\"X-Ray\",\"Hairline Fracture\",\"R002\",500.00);");
mysqli_query($link, "insert into diagnosis values (\"2013-03-31\",\"CT Scan\",\"Brain Tumour\",\"R001\",5000.00);");
mysqli_query($link, "insert into Accompanies values (\"P005\",\"Angela Donald\",\"Mumbai\",\"1978-06-02\",null,\"Male\",\"Husband\");");
mysqli_query($link, "insert into Accompanies values (\"P002\",\"Brett Lee\",\"Sydney\",\"1978-10-02\",null,\"Male\",\"Brother\");");
?>