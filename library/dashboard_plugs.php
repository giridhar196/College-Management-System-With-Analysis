<?php     
           $da_issue = date('d-m-Y');          
          $sql_count = "SELECT
          (SELECT COUNT(*) FROM tblauthors) as table1Count, 
          (SELECT COUNT(*) FROM tblbooks) as table2Count,
          (SELECT COUNT(*) FROM blog WHERE permission='1') as notice_board,
          (SELECT COUNT(*) FROM blog WHERE permission='1') as table5Count,
          (SELECT COUNT(*) FROM tblissuedbookdetails WHERE RetrunStatus='1') as table4Count,
          (SELECT COUNT(*) FROM tblissuedbookdetails WHERE issued_date='$da_issue') as tbl_todayissue,
          (SELECT COUNT(*) FROM tblbooks WHERE book_status='1') as book_count,
          (SELECT COUNT(*) FROM tblissuedbookdetails ) as books_issue,
          (SELECT COUNT(*) FROM tblissuedbookdetails WHERE RetrunStatus='0'AND return_date='$da_issue') as tbl_todayreturn,
          (SELECT COUNT(*) FROM journels_gifted_reference ) as table3Count";
            $result_author = mysqli_query($conn, $sql_count);
            if (mysqli_num_rows($result_author) > 0) {
              while($row = mysqli_fetch_assoc($result_author)) {
                $author_count = $row["table1Count"];
                $total_books = $row["table2Count"];
                $notice_count = $row["notice_board"];
                $message_count = $row["table3Count"];
                $books_issued = $row["table4Count"];
                $blog_count = $row["table5Count"];
                $book_count = $row["book_count"];
                $today_issue = $row["tbl_todayissue"];
                $today_return = $row["tbl_todayreturn"];
                $book_issue_count = $row["books_issue"];
                }
              }        
         ?>