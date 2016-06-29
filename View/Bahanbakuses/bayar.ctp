<table>
    <tr>
        <td>Total</td>
        <td>Discount</td>
        <td>HiddenDiscount</td>
        <td></td>
    </tr>
      <?php echo $this->Form->create('Bahanbakuses',array('class' => 'form-horizontal j-forms')); ?>   
    
    <input type="textarea" name="keterangan">
    <input type="text" name="bayar">
    
     <div class="form-footer">
        <?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</table>