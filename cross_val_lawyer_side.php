<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `client` WHERE CONCAT(`Adhaar_id`,FIR_No`) LIKE '%".$valueToSearch."%'";
	
	 $search_result = filterTable($query);
	 
   

//echo " No of records = ".$no;
}
 else {
    $query = "SELECT * FROM `client`";
	
	
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test_db");
    $filter_Result = mysqli_query($connect, $query);
	$no=$filter_result(rowCount());

	return $filter_Result;
	echo $no;
	
	
	}

    


?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form  method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <fieldset>
<table>

<tr>
<td>Advocate Name:</td><td>Boomi Raja.C</td>
</tr>
<tr>
<td>Gender:</td><td>Male</td>
</tr>
<tr>
<td>Experience:</td><td>6 years</td>
</tr>
<tr>
<td>Languages:</td><td>Tamil,English</td>
</tr>
<tr>
<td>Education:</td><td>M.A.,B.L.,</td>
</tr>
<tr>
<td>specialization:</td><td>Criminal,Civil</td>
</tr>
<tr>
<td>Location:</td><td>
<a href="https://www.google.com/maps?rlz=1C1CHBF_enIN837IN837&q=allinagaram+theni+in&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiOvI6mqMbnAhVTzDgGHfIpCfAQ_AUoAXoECBUQAw">click here</a>
</td>
</tr>
<tr>
<td>fees 
</td>
<td>10,000-15,000</td>
</tr>
<tr>
<td>Appoinment
</td>
<td><a href="appoinment.html">book lawyer</a></td>
</tr>
<tr>
<td>No of Success case/No of Failure case
</td>
<td>12-02</td>
</tr>

</table>
</fieldset>

<fieldset>

      <!-- populate table from mysql database -->
               <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
				
                    <td><?php echo $row['Adhaar_id'];?></td>
                    <td><?php echo $row['FIR_No'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
			 
			<p>total no of cases:03</p>
        </form>


        
    </body>
</html>