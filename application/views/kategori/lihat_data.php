<title>Catergory</title>
<h3> Category of Produk </h3>
<?php

        echo anchor ('kategori/post', 'Add Data')

?>
    <table border="1">
            <tr><th>No.</th> <th>Name of Category</th><th colspan="2">Operation</th></tr>
                    <?php
                    $no=1;
                    foreach ($record->result() as $r) {
                        echo "<tr>
                                <td>$no</td>
                                <td>$r->nm_kategori</td>
                                <td>".anchor('kategori/edit/'.$r->kategori_id,'Edit')."</td>
                                <td>".anchor('kategori/delete/'.$r->kategori_id,'Delete')."</td>            
                                
                              </tr>";
                        $no++;
                    }
                    ?>
            
    </table>

