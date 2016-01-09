<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Edit Item {$product.name}</h3>
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
            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" id="ItemAddForm" action="{$FRONTEND}inventory.php">
                <input type="hidden" name="data[Item][id]" value="{$product.id}" />
                <div class="check"></div>
                <div id="details-tab">
                <fieldset class="show">
                <legend>Inventory Item Details</legend>
                <div style="float: left; width: 350px;">
                    <div class="input text required">
                        <label for="ItemName">Name<span>*</span></label>
                        <input type="text" id="ItemName" maxlength="255" class="autofocus" name="data[Item][name]" value="{$product.name}"></div>                </div>
                
                <div class="input textarea">
                    <label for="ItemDescription">Description:</label>
                    <textarea id="ItemDescription" rows="6" cols="30" name="data[Item][description]">{$product.description}</textarea>
                </div>
                
                <div>
                    <div style="margin-bottom: 20px;" class="multiple">
                        <div class="input text required">
                            <label for="ItemCost">Choose from Category<span>*</span></label>
                            <select id="ItemCategory" style="width: 180px; margin-right:8px;" class="select2 select2-offscreen" name="data[Item][category]" tabindex="-1" title="Sorting Category">
{foreach $categories as $val}
    <option value="{$val.id}" {if $product.category_id == $val.id } selected="selected" {/if}>{$val.title}</option>
{/foreach}
</select>
                        </div>                    
                    </div>

                    <div style="float: left; width: 50%;">
                        <div class="input text required">
                            <label for="ItemCost">Purchase Price per Unit<span>*</span></label>
                            <div class="money-symbol">&#8377;</div>
                            <input type="text" id="ItemCost" maxlength="17" style="width: 140px; margin-right:8px;" class="money negative" name="data[Item][cost]" value="{$product.cost}"></div>                    </div>
                    <div style="float: left; width: 50%;">
                        <div class="input text required">
                            <label for="ItemPrice">Default Selling Price<span>*</span></label>
                            <div class="money-symbol">&#8377;</div>
                            <input type="text" id="ItemPrice" maxlength="17" style="width: 140px; margin-right:4px;" class="money" name="data[Item][price]" value="{$product.price}"></div>                    </div>
                    
					
                    <div>
                        <div style="float: left; width: 50%;">
                            <div class="input text">
                                <label for="ItemSku">SKU</label>
                                <input type="text" id="ItemSku" maxlength="255" style="width: 180px;" name="data[Item][sku]" value="{$product.sku}">
                            </div>                        
                        </div>
                        <div style="float:left; width: 50%;" id="regular">
                            <div class="input text">
                                <label for="ItemSerialNumber">Serial Number</label>
                                <input type="text" id="ItemSerialNumber" maxlength="255" name="data[Item][serial_number]" value="{$product.serial_no}">
                            </div>                        
                        </div>
                       <div style="float: left; width: 50%;" id="multiples">
                            <div class="input text">
                                <label for="ItemQuantity">Shop Quantity</label>
                                <input type="text" id="ItemQuantity" maxlength="14" style="width:60px;" name="data[Item][quantity_shop]" value="{$product.qty_shop}" >
                            </div>                        
                       </div>
                        <div style="clear: both; float: left; width: 50%;" id="multiples">
                            <div class="input text">
                                <label for="ItemQuantity">Godown Quantity</label>
                                <input type="text" id="ItemQuantity" maxlength="14" style="width:60px;" name="data[Item][quantity_godown]" value="{$product.qty_godown}" >
                            </div>                        
                       </div>
                        <div style="float: left; width: 50%;" id="uom">
                                                            &nbsp;
                                                    </div>
                      </div>
                      <div>
                    <div style="float: left; width: 50%;" id="thresholds">
                        <div class="input text">
                            <label for="ItemThreshold">Low Inventory Reminder</label>
                            <input type="text" id="ItemThreshold" maxlength="11" style="width:60px;margin-right:4px;" name="data[Item][threshold]" value="{$product.threyshold}"> 
                            <div data-toggle="tooltip" title="&lt;!-- words[51] --&gt;
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
                                <button class="button" type="submit" name="action" value="update">Update Item</button>                            <span class="cancel">or <a class="close-dialog" href="javascript:void(0)">Cancel</a></span>
                        </div>

</form>        </div>
    </div>
</div>