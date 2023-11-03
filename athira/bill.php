<html>

 <head>
 
  <title>PURCHASE BILL</title>
  
 </head>
  
    <body>
    
      <center>
      
         <form>
         
           <table border=1  >
            
            <tr>
            
              <th>SI.NO</th>
              <th>ITEM</th> 
              <th>QUANTITY</th>
              <th>PRICE</th>
              <th>TOTAL</th>
              
            </tr>
               <?php for($i=1;$i<=4;$i++)  { ?>
            <tr>
                 <td>
                   <?php echo $i; ?>
                 </td>
                 <td>
                   <input type=text>
                 </td>
                 <td>
                   <input type="number"/>
                 </td>
                 <td>
                   <input type="number"/>
                 </td>
                 <td>
                   <input type="number"/>
                 </td>
 
             </tr>
             
             <tr>
               
                <td>GRAND TOTAL</td>
                <td> </td>
             
             </tr>
             
             <?php } ?>

              
          
         

           </table>
         </form>
  
  
  </center>
  
  </body>
  
</html>
