
<?php $careAssessmentActions = '
                <a href="'.base_url().'index.php/ltss/programforms/pss/details" role="button" data-toggle="modal"><span class="fa fa-arrow-circle-right"></span>&nbsp;&nbsp;View</a>
                <br/>
                <a href="#removeBloodGlucose" role="button" data-toggle="modal"><span class="fa fa-trash"></span>&nbsp;&nbsp;Discard</a>
'?>
<table class="app-table">
    <thead>
    <tr>
        <th>
            Last Modified Date
        </th>
        <th>
            Last Modified By
        </th>
        <th>
            Submission Date
        </th>
        <th>
            Status
        </th>
        <th>
            Active/Inactive
        </th>
        <th>
            Actions
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            08/16/2014
        </td>
        <td>
            Casey Manajer
        </td>
        <td>
            08/18/2014
        </td>
        <td>
            Submitted
        </td>
        <td>
            Active
        </td>
        <td>
            <?php echo $careAssessmentActions ?>
        </td>
    </tr>
    </tbody>
</table>