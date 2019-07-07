<!DOCTYPE html>
    <head>
        <title>Password anda</title>
    </head>

    <body>
        <div>

            <h3>Hasil</h3>
           
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>EMAIL</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(count($cari)>0)
                    {
                        foreach ($cari as $a) {
                         echo "<tr><td>". $a->email ."</td><td>". $a->password. "</td></tr>";   
                        }
                    }
                    else{
                        echo "<tr><td>Data tidak ada</td><td></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
    </body>
    </html>