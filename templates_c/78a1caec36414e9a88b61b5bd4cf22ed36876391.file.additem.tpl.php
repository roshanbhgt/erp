<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 17:15:28
         compiled from "./templates/additem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20480750563b41581d7661-26490382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a1caec36414e9a88b61b5bd4cf22ed36876391' => 
    array (
      0 => './templates/additem.tpl',
      1 => 1445758274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20480750563b41581d7661-26490382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'FRONTEND' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b4158267033_12685034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b4158267033_12685034')) {function content_563b4158267033_12685034($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['categories']->value)<0){?>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add New Inventory Item</h3>
        </div>
        <div class="content">
            <fieldset class="show">
            <legend>Choose a Category to add Inventory to</legend>

            <ul class="bulleted">

            <p>You'll first need to create at least one category before adding inventory items.</p>                
                                </ul>
            <br>
            <a class="load-dialog" href="/category.php?action=new">+ Create New Category</a>
            </fieldset>
        </div>
    </div>
</div>
<?php }else{ ?>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add Inventory Item</h3>
        </div>
        <script>
            function showhide(tab,content){
                if(tab == 'tab1'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('photos-publishing-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab2').removeClass('active');
                }else if(tab == 'tab2'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('details-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab1').removeClass('active');
                }
            }
            function resetForm(){
                document.getElementById("ItemAddForm").reset();
            }
        </script>
        <div class="smbutton-tabs">
            <a class="smbutton active" id="tab1" href="javascript:void(0)" onclick="showhide('tab1','details-tab')">Inventory Item Details</a>
            <a class="smbutton" id="tab2" href="javascript:void(0)" onclick="showhide('tab2','photos-publishing-tab')">Item Photos &amp; Publishing</a>
        </div>
        <div class="content">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" id="ItemAddForm" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php">
                <div class="check"></div>
                <div id="details-tab">
                <fieldset class="show">
                <legend>Inventory Item Details</legend>
                <div style="float: left; width: 350px;">
                    <div class="input text required"><label for="ItemName">Name<span>*</span></label><input type="text" id="ItemName" maxlength="255" class="autofocus" name="data[Item][name]"></div>                </div>
                
                <div class="input textarea"><label for="ItemDescription">Description:</label><textarea id="ItemDescription" rows="6" cols="30" name="data[Item][description]"></textarea></div>
                
                <div>
                    <div style="margin-bottom: 20px;" class="multiple">
                        <div class="input text required">
                            <label for="ItemCost">Choose from Category<span>*</span></label>
                            <select id="ItemCategory" style="width: 180px; margin-right:8px;" class="select2 select2-offscreen" name="data[Item][category]" tabindex="-1" title="Sorting Category">
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</option>
<?php } ?>
</select>
                        </div>                    
                    </div>

                    <div style="float: left; width: 50%;">
                        <div class="input text required"><label for="ItemCost">Purchase Price per Unit<span>*</span></label><div class="money-symbol">&#8377;</div><input type="text" id="ItemCost" maxlength="17" style="width: 140px; margin-right:8px;" class="money negative" name="data[Item][cost]"></div>                    </div>
                    <div style="float: left; width: 50%;">
                        <div class="input text required"><label for="ItemPrice">Default Selling Price<span>*</span></label><div class="money-symbol">&#8377;</div><input type="text" id="ItemPrice" maxlength="17" style="width: 140px; margin-right:4px;" class="money" name="data[Item][price]"></div>                    </div>
                    
					
                    <div>
                        <div style="float: left; width: 50%;">
                            <div class="input text"><label for="ItemSku">SKU</label><input type="text" id="ItemSku" maxlength="255" style="width: 180px;" name="data[Item][sku]"></div>                        </div>
                                                <div style="float:left; width: 50%;" id="regular">
                            <div class="input text"><label for="ItemSerialNumber">Serial Number</label><input type="text" id="ItemSerialNumber" maxlength="255" name="data[Item][serial_number]"></div>                        </div>
                       <div style="clear: both; float: left; width: 50%;" id="multiples">
                            <div class="input text">
                                <label for="ItemQuantity">Shop Quantity</label>
                                <input type="text" id="ItemQuantity" maxlength="14" value="0" style="width:60px;" name="data[Item][quantity_shop]">
                            </div>                        
                       </div>
                        <div style="clear: both; float: left; width: 50%;" id="multiples">
                            <div class="input text">
                                <label for="ItemQuantity">Godown Quantity</label>
                                <input type="text" id="ItemQuantity" maxlength="14" value="0" style="width:60px;" name="data[Item][quantity_godown]">
                            </div>                        
                       </div>
                        <div style="float: left; width: 50%;" id="uom">
                                                            &nbsp;
                                                    </div>
                      </div>
                      <div>
                                                <div style="float: left; width: 50%;" id="thresholds">
                        <div class="input text"><label for="ItemThreshold">Low Inventory Reminder</label><input type="text" id="ItemThreshold" maxlength="11" style="width:60px;margin-right:4px;" name="data[Item][threshold]"> <div data-toggle="tooltip" title="&lt;!-- words[51] --&gt;
Enter the lowest number of quantity you'd like to have before being notified this inventory item is considered low." class="question-mark"></div></div>                        </div>
                                                <div style="float: left; width: 50%;">
                        <div class="input select"><label for="ItemWeight">Sorting Priority</label>
                            <select id="ItemWeight" style="width: 180px; margin-right:8px;" class="select2 select2-offscreen" name="data[Item][weight]" tabindex="-1" title="Sorting Priority">
<option value="5">Highest</option>
<option value="4">High</option>
<option selected="selected" value="3">Normal</option>
<option value="2">Low</option>
<option value="1">Lowest</option>
</select> <div data-toggle="tooltip" title="&lt;!-- words[71] --&gt;
Higher priority items will be displayed first in your inventory list by default. This also applies to the API inventory list." class="question-mark"></div></div>                        </div>
                        </div>
                                                </fieldset>
                    </fieldset>

                                </div>
                <div class="widget images" id="photos-publishing-tab" style="display:none">
                        <fieldset class="show">
                            <legend>Inventory Item Photos</legend>
                            <p>Upload photo for each inventory item. Use the button below to browse your computer for the images you'd like to upload.</p>
                            
<div class="qq-upload-button smbutton" style="position: relative; overflow: hidden; direction: ltr;">
    Upload Photos
    <input type="file" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
</div>
</div></div>
                        </fieldset>

                            <div style="text-align: center;">
                                <button class="button" type="submit" name="action" value="add">Save New Item</button>                            <span class="cancel">or <a class="close-dialog" href="javascript:void(0)">Cancel</a></span>
                        </div>

</form>        </div>
    </div>
</div>
<?php }?><?php }} ?>