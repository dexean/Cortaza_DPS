<?php


    include 'basedao.php';
        
        class functionDAO extends BaseDAO{
        
        

            function login($username, $password){

                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT username, password FROM  employees WHERE username =? AND password =?");
                $stmt->bindParam(1, $username);
                $stmt->bindParam(2, $password);
                $stmt->execute();

                $found = false; 


                if($stmt->fetch()){
                  return true;

                }

                $this->closeConn();
            }   

            function profile($username){
                $this->openConn();

                $stmt=$this->dbh->prepare("SELECT mode_of_employment,classification_of_employee,fullname,mobile FROM employees WHERE username=?");
                $stmt->bindParam(1,$username);
                $stmt->execute();

                while($row=$stmt->fetch()){
                    echo "<div id=".$row[0].">";
                    echo "Mode Of Employment:" .$row[0]."<br />";
                    echo "Classification Of Employee:" .$row[1]."<br />";
                    echo "Fullname:" .$row[2]."<br />";
                    echo "Mobile number:" .$row[3]."<br />";
                    echo "</div>";
                }

                $this->closeConn();
 
            }





    /*-------------------Employee--------------------*/



            function viewEmployeeData(){ 

                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT mode_of_employment,classification_of_employee,picture,fullname,mobile,username FROM employees ");
                $stmt->execute();
                
                $this->closeConn();
                while($row = $stmt->fetch()){
                  echo "<tr id=".$row[0].">";
                  echo "<td>".$row[0]."</td>";
                  echo "<td>".$row[1]."</td>";
                  echo "<td>".$row[2]."</td>";
                  echo "<td>".$row[3]."</td>";
                  echo "<td>".$row[4]."</td>";
                  echo "<td>".$row[5]."</td>";
                  echo "<td><button id='btn-release' class='btn btn-primary btn-mini' onclick = 'release_salary(".$row[0].")'>Release Salary</button></td>";
                  echo "<td><button id='' class='btn btn-primary btn-mini' onclick = 'confirm_employee(".$row[0].")'>Confrirm</button></td>";
                  echo "</tr>"; 
                }

            }

            function searchEmployee($search) {

                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM employees WHERE username like '".$search."%'");
                $stmt->execute();
                $found=false;

                while($row = $stmt->fetch()){
                      echo "<tr id=".$row[0].">";
                      echo "<td>".$row[1]."</td>";
                      echo "<td>".$row[2]."</td>";
                      echo "<td>".$row[3]."</td>";
                      echo "<td>".$row[4]."</td>";
                      echo "<td>".$row[5]."</td>";
                      echo "<td>".$row[6]."</td>";
                      echo "<td><button id='btn-release' class='btn btn-primary btn-mini' onclick = 'release_salary(".$row[0].")'>Release Salary</button></td>";
                      echo "<td><button id='' class='btn btn-primary btn-mini' onclick = 'confirm_employee(".$row[0].")'>Confrirm</button></td>";
                      echo "</tr>"; 
                      $found=true;

                }
                if(!$found){
                    echo "<tr><td colspan='8'>Not found</td></tr>";
                }

                    $this->closeConn();
            }


            function register($mode_of_employment, $classification_of_employee, $fullname, $mobile, $username, $password ){
              
                $this->openConn();
            
                $stmt = $this->dbh->prepare("INSERT INTO employees (mode_of_employment, classification_of_employee, fullname, mobile, username,password) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bindParam(1, $mode_of_employment);
                $stmt->bindParam(2, $classification_of_employee);
                $stmt->bindParam(3, $fullname);  
                $stmt->bindParam(4, $mobile);
                $stmt->bindParam(5, $username);
                $stmt->bindParam(6, $password);  
                $stmt->execute();
                $id = $this->dbh->lastInsertId();



                $stmt2=$this->dbh->prepare("INSERT INTO employee_constraint(employee_id) values(?)");
                //$stmt2->bindParam(1, $emp_id[0]);
                $stmt2->bindParam(1, $id);
                $stmt2->execute();
                
                $this->closeConn();

            }

            function deleteEmployeeData($id){
                
                $this->openConn();

                $stmt = $this->dbh->prepare("DELETE FROM employees WHERE id = ?");
                $stmt->bindParam(1, $id);
                $stmt->execute();
            
                $this->closeConn(); 
            }
            function retrieveEmployeeData($id){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM employees WHERE id = ?");
                $stmt->bindParam(1, $id);
                $stmt->execute();
              
                $record = $stmt->fetch();
                $data = array("id"=>$record[0],"mode_of_employment"=>$record[1],"classification_of_employee"=>$record[2],"fullname"=>$record[3],"mobile"=>$record[4],"username"=>$record[5],"password"=>$record[6]);
                $json_string = json_encode($data);  
              
           
                echo $json_string;

                $this->closeConn(); 
            }


            function saveEmployeeData($id,$employee_id, $mode_of_employment, $classification_of_employee, $picture, $fullname, $mobile, $username, $password ){
                $this->openConn();
            
                $stmt = $this->dbh->prepare("UPDATE employees SET mode_of_employment = ?, classification_of_employee = ?, fullname = ?, mobile = ?, username=?, password=?  WHERE id = ?");
                $stmt->bindParam(1, $id);
                $stmt->bindParam(2, $mode_of_employment);
                $stmt->bindParam(3, $classification_of_employee);
                $stmt->bindParam(4, $fullname);
                $stmt->bindParam(5, $mobile);
                $stmt->bindParam(6, $username);
                $stmt->bindParam(7, $password);
                $stmt->execute();
           
                $this->closeConn();

            }

            /*------------Attendance MONITORING-----------------*/

            function viewing_attendance($username){
               $this->openConn(); 

               $stmt = $this->dbh->prepare("SELECT att. time_in,att. time_out,att. over_time_worked,att. date_checked,att. remarks from attendance as att,employee_constraint as ec,employees as emp WHERE att. id = ec. attendance_id AND emp. id = ec. employee_id AND emp. username = ?");
               $stmt->bindParam(1,$username);
               $stmt->execute();

                $this->closeConn();
                 while($row = $stmt->fetch()){
                  echo "<tr id=".$row[0].">";
                  echo "<td>".$row[0]."</td>";
                  echo "<td>".$row[1]."</td>";
                  echo "<td>".$row[2]."</td>";
                  echo "<td>".$row[3]."</td>";
                  echo "<td>".$row[4]."</td>";
                  echo "</tr>"; 
                }


            }
            function time_in($username,$time_in,$date_checked){
                $this->openConn();

                $stmt = $this->dbh->prepare("INSERT INTO `DPS`.`attendance` (`time_in`, `date_checked`) VALUES ( CURTIME(),  CURDATE())");
                $stmt->execute();
                $id = $this->dbh->lastInsertId();

                $stmt2=$this->dbh->prepare("SELECT id FROM employees WHERE username=?");
                $stmt2->bindParam(1, $username);
                $stmt2->execute();
                $emp_id=$stmt2->fetch();


                $stmt3=$this->dbh->prepare("INSERT INTO employee_constraint(employee_id,attendance_id) values(?,?)");
                $stmt3->bindParam(1, $emp_id[0]);
                $stmt3->bindParam(2, $id);
                $stmt3->execute();

                $this->closeConn();

            }
            function time_out($username,$remarks){
                $this->openConn();
                

                $stmt=$this->dbh->prepare("SELECT MAX(att. id) as latestAttendedID  FROM attendance AS att,employee_constraint AS ec,employees AS emp WHERE att. id=ec. attendance_id AND emp. username = ?");
                $stmt->bindParam(1, $username);
                $stmt->execute();
                $att_id=$stmt->fetch();

                $stmt2 = $this->dbh->prepare("UPDATE attendance SET time_out = CURTIME() WHERE attendance. id = ?");
                $stmt2->bindParam(1,$att_id[0]);
                $stmt2->execute();

                $stmt3 = $this->dbh->prepare("UPDATE attendance SET over_time_worked = time_out - time_in  WHERE attendance. id = ?");
                $stmt3->bindParam(1,$att_id[0]);
                $stmt3->execute();


                $stmt4 = $this->dbh->prepare("UPDATE attendance SET remarks = ?  WHERE attendance. id = ?");
                $stmt4->bindParam(1,$remarks);
                $stmt4->bindParam(2,$att_id[0]);
                $stmt4->execute();
                
                    
                $this->closeConn();
            }

            
            function Viewing_overtimeworked(){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT (time_out - time_in) as over_time_worked from attendance ");

                $this->closeConn();
            }
            function viewing_Attendance_For_a_Spec_Date($date1,$date2){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM attendance WHERE date_checked BETWEEN ? AND ?");

                $this->closeConn();
            }

            function add_employment_history($username, $date_of_employment, $company_name, $company_address, $company_phone, $company_email, $position, $salary){
                
                $this->openConn();

                $stmt = $this->dbh->prepare("INSERT INTO employment_history(date_of_employment,company_name,company_address,company_phone,company_email,position,salary) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bindParam(1,$date_of_employment);
                $stmt->bindParam(2,$company_name);
                $stmt->bindParam(3,$company_address);
                $stmt->bindParam(4,$company_phone);
                $stmt->bindParam(5,$company_email);
                $stmt->bindParam(6,$position);
                $stmt->bindParam(7,$salary);
                $stmt->execute();
                $id = $this->dbh->lastInsertId();

                $stmt2 = $this->dbh->prepare("SELECT employees. id FROM employees WHERE username = ?");
                $stmt2->bindParam(1, $username);
                $stmt2->execute();
                $emp_id = $stmt2->fetch();


                $stmt3 = $this->dbh->prepare("SELECT att. id FROM attendance AS att,employees AS emp WHERE att. id=emp. id AND emp. username = ?"/*"SELECT MAX(att. id) as latestAttendedID  FROM attendance AS att,employee_constraint AS ec,employees AS emp WHERE att. id=ec. attendance_id AND emp. username = ?"*/);
                $stmt3->bindParam(1, $username);
                $stmt3->execute();
                $att_id = $stmt3->fetch();

                $stmt4 = $this->dbh->prepare("INSERT INTO employee_constraint(attendance_id,employee_id,employment_id) values(?, ?, ?)");
                $stmt4->bindParam(1,$att_id[0]);
                $stmt4->bindParam(2,$emp_id[0]);
                $stmt4->bindParam(3,$id);
                $stmt4->execute();

                $this->closeConn();

            }

            function viewEmploymentHistory(){

                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT date_of_employment,company_name,company_address,company_phone,company_email,position,salary  FROM employment_history");
                $stmt->execute();

                $this->closeConn();

                while($row = $stmt->fetch()){
                    echo "<tr id=".$row[0].">";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td>".$row[5]."</td>";
                    echo "<td>".$row[6]."</td>";
                    echo "</tr>";    
                }
                

            }


            function viewingOvertimeWorked(){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT emp. fullname,att. over_time_worked,att. remarks FROM employees as emp,attendance as att,employee_constraint as ec WHERE emp. id = ec. employee_id AND att. id = ec. attendance_id");
                $stmt->execute();

                $this->closeConn();

                while ($row = $stmt->fetch()) {
                    echo"<tr id=".$row[0].">";
                    echo"<td>".$row[0]."</td>";
                    echo"<td>".$row[1]."</td>";
                    echo"<td>$250.00</td>";
                    echo"<td>".$row[2]."</td>";
                    echo"</tr>";
                }

            }
            function viewAttendance(){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT emp. id,emp. fullname,att. time_in,att. time_out,att. date_checked,att. remarks FROM employees as emp,attendance as att,employee_constraint as ec WHERE emp. id = ec. employee_id AND att. id = ec. attendance_id");
                $stmt->execute();

                $this->closeConn();
                while($row = $stmt->fetch()){
                    echo "<tr id=".$row[0].">";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td>".$row[5]."</td>";
                    echo "</tr>";

                }
            }

            function viewPayoutByEmp($username){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM payout as p,employee_constraint as ec,employees as emp WHERE p. id = ec. payout_id AND emp. id = ec. employee_id AND username = ?");
                $stmt->bindParam(1,$username);
                $stmt->execute();

                $this->closeConn();
                while($row = $stmt->fetch()){
                    echo "<tr id=".$row[0].">";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
                }

            }

            function releaseSalary($username_to_pay, $salary, $overtime_pay, $date_released, $remarks){
                $this->openConn();

                $stmt = $this->dbh->prepare("INSERT INTO payout (salary,overtime_pay,date_released,remarks) VALUES (?, ?, ?, ?)");
                $stmt->bindParam(1,$salary);
                $stmt->bindParam(2,$overtime_pay);
                $stmt->bindParam(3,$date_released);
                $stmt->bindParam(4,$remarks);
                $stmt->execute();
                $id = $stmt->lastInsertId();


                $stmt2 = $this->dbh->prepare("SELECT employees. id FROM employees WHERE username = ?");
                $stmt2->bindParam(1, $username_to_pay);
                $stmt2->execute();
                $emp_id = $stmt2->fetch();


                $stmt3 = $this->dbh->prepare("SELECT att. id FROM attendance AS att,employees AS emp WHERE att. id=emp. id AND emp. username = ?"/*"SELECT MAX(att. id) as latestAttendedID  FROM attendance AS att,employee_constraint AS ec,employees AS emp WHERE att. id=ec. attendance_id AND emp. username = ?"*/);
                $stmt3->bindParam(1, $username_to_pay);
                $stmt3->execute();
                $att_id = $stmt3->fetch();

                $stmt4 = $this->dbh->prepare("SELECT eh. id FROM employment_history AS eh,employees AS emp WHERE eh. id = emp. id AND emp. username = ?");
                $stmt4->bindParam(1,$username_to_pay);
                $stmt4->execute();
                $emp_his = $stmt4->fetch();

                $stmt5 = $this->dbh->prepare("INSERT INTO employee_constraint (attendance_id,employee_id,employment_id,payout_id) VALUES (?, ?, ?, ?)");
                $stmt5->bindParam(1,$att_id[0]);
                $stmt5->bindParam(2,$emp_id[0]);
                $stmt5->bindParam(3,$emp_his[0]);
                $stmt5->bindParam(4,$id);
                $stmt5->execute();

                //$stmt4 = $this->dbh->prepare("UPDATE employee_constraint SET payout_id = ? WHERE employee_constraint. id = ");

                $this->closeConn();
            }



            
  }    
    
	
		
     
?>
