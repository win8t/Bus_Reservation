<?php
require_once "dbconnect.php";

function seattype($bus_type) {
    switch ($bus_type) {
        case 'Executive':
            ?>
            <select name="seatnum" class="form-select">
            <?php
       
            for ($seat = 1; $seat <= 48; $seat++) {
                echo "<option value='$seat'>$seat</option>";
            }
            
        ?>
        </select>
     
    
        <?php
          break;
        case 'Executive Solo':
            ?>
            <select name="seatnum" class="form-select">
            <?php
        
            for ($seat = 1; $seat <= 32; $seat++) {
                echo "<option value='$seat'>$seat</option>";
            }
            
        ?>
        </select>
      
    
        <?php
        break;
        case 'Executive Class':
            ?>
            <select name="seatnum" class="form-select">
            <?php
        
            for ($seat = 1; $seat <= 40; $seat++) {
                echo "<option value='$seat'>$seat</option>";
            }
            
        ?>
        </select>
      
    
        <?php
          break;
        case 'Executive Luxury':
            ?>
            <select name="seatnum" class="form-select">
            <?php
        
            for ($seat = 1; $seat <= 36; $seat++) {
                echo "<option value='$seat'>$seat</option>";
            }
            
        ?>
        </select>
      
    
        <?php
          break;

      }
    }



?>