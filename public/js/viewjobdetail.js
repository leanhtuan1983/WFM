 
 //Lấy tất cả các thành phần trong class "process-row"
  const rows = document.querySelectorAll(".process-row");


  // Tạo vòng lặp để duyệt từng thành phần của "process-row" 
  for(let i = 0; i < rows.length; i++){

 
//Lấy status của process đang được duyệt
 const status = rows[i].querySelector(".status").textContent;


// Gán class cho process đang được duyệt dựa trên status
    
      //Nếu Process có status là "Chưa triển khai"
      if(status == 'Chưa triển khai'){ 
          rows[i].classList.add("pending");
        } 

      //Hoặc Process có status là "Đang thực hiện"
      else if(status == 'Đang thực hiện'){ 
          rows[i].classList.add("in-process"); 
        }

       //Hoặc Process có status là "Đã hoàn thành"
      else if(status == 'Đã hoàn thành'){ 
          rows[i].classList.add("completed");
         } 

      //Hoặc Process có status là "Hoãn"
      else if(status == 'Hoãn'){ 
          rows[i].classList.add("cancel");
         }   
      
        // Process có status khác
      else { rows[i].classList.add("cancel"); }

  }