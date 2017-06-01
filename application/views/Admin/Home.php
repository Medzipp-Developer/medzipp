<div class="container-fluid">
    <table class="table table-stripped">
        <tr>
            <th>S.No</th>
            <th>Adhar No</th>
            <th>Patient Name</th>
            <th>Upload Source</th>
            <th>Report Type</th>
            <th>Uploaded File</th>
            <th>Report Link</th>
            <th>Upload Time</th>
            <th></th>
        </tr>
        <?php $name=array('1','102563589568956','Kishor Pant','Website','Prescription','image.jpg','view reports','10:35');?>
        <?php for($j=0;$j<=9;$j++){ $i=0;?>
        <tr>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td><?php echo $name[$i++];?></td>
            <td>
                <button class="btn btn-md" type="button">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </button>
               </td>

        </tr>
        <?php }?>
    </table>

</div>