<?php     
           $da_issue = date('d-m-Y');          
          $sql_count = "SELECT
         
          (SELECT COUNT(*) FROM notice_board WHERE branch='$b' AND semister='$semister') as notice_board,
          (SELECT COUNT(*) FROM notice_board WHERE regdno='$rollnumber') as personal,
         
         
          (SELECT SUM(fine) FROM tblissuedbookdetails  WHERE StudentID='$R_E_I_D') as fine_count,
          
          (SELECT COUNT(*) FROM tblissuedbookdetails WHERE RetrunStatus='1' AND StudentID='$R_E_I_D') as tbl_todayreturn";
          
            $result_author = mysqli_query($conn, $sql_count);
            if (mysqli_num_rows($result_author) > 0) {
              while($row = mysqli_fetch_assoc($result_author)) {
               
                $notice_count = $row["notice_board"];
               
                $today_return = $row["tbl_todayreturn"];
                $personal = $row['personal'];
                $fine_count= $row['fine_count'];
               
                }
              }        
         ?>