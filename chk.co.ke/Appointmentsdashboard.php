<?php
                    // Replace with your database connection code
                    $db = new mysqli("localhost", "root", "", "kyeni");
        
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
        
                    // Replace with your SQL query to fetch data
                    $sql = "SELECT name, email, date, department FROM appointments";
                    $result = $db->query($sql);
        
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td><a class='download-link' href='email' download>" . $row["email"] . "</a></td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo "<td>" . $row["department"] . "</td>";
                            echo "</tr>";
                        }
                    }
        
                    $db->close();
                    ?>