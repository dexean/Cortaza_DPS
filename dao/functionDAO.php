<?php


    include './dao/basedao.php';
        
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





    /*-------------------Employee--------------------*/



            function viewEmployeeData(){ 

                $this->openConn();
                $stmt = $this->dbh->prepare("SELECT DISTINCT mode_of_employment,classification_of_employee,picture,fullname,mobile,username FROM employees");
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

            function register($mode_of_employment, $classification_of_employee, $fullname, $mobile, $username, $password ){
              
                $this->openConn();
            
                $stmt = $this->dbh->prepare("INSERT INTO employees (mode_of_employment, classification_of_employee, fullname, mobile, username,password) VALUES(?, ?, ?, ?, ?, ?)");
                $stmt->bindParam(1, $mode_of_employment);
                $stmt->bindParam(2, $classification_of_employee);
                $stmt->bindParam(3, $fullname);  
                $stmt->bindParam(4, $mobile);
                $stmt->bindParam(5, $username);
                $stmt->bindParam(6, $password);  
                $stmt->execute();
                $id = $this->dbh->lastInsertId();


                $stmt2=$this->dbh->prepare("INSERT INTO employee_constraint(employee_id,attendance_id) values(?,?)");
                $stmt2->bindParam(1, $emp_id[0]);
                $stmt2->bindParam(2, $id);
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
            

            /*-------------------PAYOUT MONITORING-----------------*/

            function releaseSalary($salary, $overtime_pay, $date_released, $remarks){

                $this->openConn();

                $stmt = $this->dbh->prepare("INSERT INTO CMS. payout (salary, overtime_pay, date_released, remarks) VALUES (? , ? , NOW(), ?)");
                $stmt->bindParam(1, $salary);
                $stmt->bindParam(2, $overtime_pay);
                $stmt->bindParam(3, $date_released);
                $stmt->bindParam(4, $remarks);  
                $stmt->execute();
                $id = $this->dbh->lastInsertId();

                $this->closeConn();
            }
            function viewPayout(){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT salary,overtime_pay,date_released,remarks FROM payout WHERE payout_id=?");

                $this->closeConn();
            }
            function addPayoutHistory($salary, $overtime_pay, $date_released, $remarks){

                $this->openConn();

                $stmt = $this->dbh->prepare("INSERT INTO CMS. payout (salary, overtime_pay, date_released, remarks) VALUES(?, ?, NOW(), ?)");
                $stmt->bindParam(1, $salary);
                $stmt->bindParam(2, $overtime_pay);
                $stmt->bindParam(3, $date_released);
                $stmt->bindParam(4, $remarks);   
                $stmt->execute();
                $id = $this->dbh->lastInsertId();

                $this->closeConn();
            }
            function viewPayoutHistory(){

                $this->openConn();
    
                //$stmt = $this->dbh->prepare("SELECT FROM ");

                $this->closeConn();
            }


            /*------------Attendance MONITORING-----------------*/

            function viewing_attendance($username){

               $this->openConn(); 

               $stmt = $this->dbh->prepare("SELECT att. time_in,att. time_out,att. over_time_worked,att. date_checked,att. remarks FROM attendance AS att, employee_constraint AS ec,employees AS emp WHERE att. id = ec. attendance_id  AND emp. username = ?");
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

                $stmt = $this->dbh->prepare("INSERT INTO `CMS`.`attendance` (`time_in`, `date_checked`) VALUES ( CURTIME(),  CURDATE());");
                $stmt->execute();
                $id = $this->dbh->lastInsertId();

                $stmt2=$this->dbh->prepare("SELECT id FROM employees WHERE username=?");
                $stmt2->bindParam(1, $username);
                $stmt2->execute;
                $emp_id=$stmt2->fetch();


                $stmt3=$this->dbh->prepare("INSERT INTO employee_constraint(employee_id,attendance_id) values(?,?)");
                $stmt3->bindParam(1, $emp_id[0]);
                $stmt3->bindParam(2, $id);
                $stmt3->execute();

                $this->closeConn();

            }
            function time_out($username){
                $this->openConn();
                //$stmt = $this->dbh->prepare("SELECT att. id from attendance as att , employee_constraint as ec, employees as emp where ec. employee_id = emp. id order by att. id desc limit 1")
                $stmt = $this->dbh->prepare("SELECT att. id FROM attendance AS att, employee_constraint AS ec,employees AS emp WHERE att. id = ec. attendance_id  AND emp. username = ?");
                $stmt = bindParam(1, $username);
                $stmt->execute();


                    $stmt = $this->dbh->prepare("UPDATE `CMS`.attendance SET time_out = CURTIME() WHERE attendance. id = ?");
                    $stmt->execute();
                    $id = $this->dbh->lastInsertId();
                    $this->closeConn();
            }
            function viewTime_in (){

                $this->openConn();
                $stmt = $this->dbh->prepare("SELECT * FROM attendance");
                $this->closeConn();


            }

            /*----------------INSURANCE MONITORING-------------*/
            function Viewing_overtimeworked(){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT (time_out - time_in) as over_time_worked from attendance;");

                $this->closeConn();
                //SELECT (time_out - time_in) as over_time_worked from attendance
            }
            function viewing_Attendance_For_a_Spec_Date($date1,$date2){
                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM attendance WHERE date_checked BETWEEN ? AND ?");

                $this->closeConn();
            }

            
            function searchEmployee($id) {

                $this->openConn();

                $stmt = $this->dbh->prepare("SELECT * FROM employees WHERE id=?");
                $stmt->bindParam(1,$id);
                $stmt->execute();
                $found=false;

                while($row = $stmt->fetch()){
                    if(!$found) {
                  echo "<tr id=".$row[0].">";
                  echo "<td>".$row[0]."</td>";
                  echo "<td>".$row[1]."</td>";
                  echo "<td>".$row[2]."</td>";
                  echo "<td>".$row[3]."</td>";
                  echo "<td>".$row[4]."</td>";
                  echo "<td>".$row[5]."</td>";
                  echo "</tr>"; 
                   $found=true;
                     
                }else{
                    echo "Not Found";
                    
                }

                $this->closeConn();


            }
        }

      
  }    
    
	
		
     
?>
