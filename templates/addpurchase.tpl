{literal}
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#purch_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
{/literal}
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add Purchase Bill</h3>
        </div>
        <script>
            function showhide(tab,content){
                if(tab == 'tab1'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('pricing-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab2').removeClass('active');
                }else if(tab == 'tab2'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('details-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab1').removeClass('active');
                }
            }
        </script>
        <div class="smbutton-tabs">
            <a class="smbutton active" id="tab1" href="javascript:void(0);" onclick="showhide('tab1','details-tab')">Purchase Details</a>
            <a class="smbutton" id="tab2" href="javascript:void(0);" onclick="showhide('tab2','pricing-tab')">Items Details</a>
        </div>
        <div class="content">
            <form accept-charset="utf-8" method="post" action="{$FRONTEND}purchasebills.php">
            <div class="check"></div>
            <div id="details-tab">
                <fieldset class="show">
                    <legend>Purchase Information</legend>
                    <div style="width: 100%; float: left;">
                        <div class="input text required" style="width: 49%; float: left; clear: none;">
                            <label for="chalan">Bill No<span>*</span></label>
                            <input type="text" maxlength="255" class="autofocus input-textarea-206" name="chalan">
                        </div>
                        <div class="input text" style="width: 49%; float: left; clear: none;">
                            <label for="name">Name</label>
                            <input type="text" maxlength="255" class="input-textarea-206" name="name">
                        </div>
                    </div>
                    <div style="clear: both;"></div>                                    
                    <div style="width: 50%; float: left;">
                        <div class="input text">
                            <label for="address">Address</label>
                            <textarea class="input-textarea-206" name="address" style="width:400px;height:100px" ></textarea>
                        </div>
                    </div>
                    <div style="clear: both;"></div>                                    
                    <div style="width: 50%; float: left;">                        
                        <div class="input text">
                            <label for="prchasedate">Purchase Date</label>
                            <input type="text" id="purch_date" maxlength="255" class="input-textarea-206" name="prchasedate">
                        </div>
                    </div>
                    <div style="clear: both;"></div>                                    
                </fieldset>
            </div>
            <div id="pricing-tab" style="display: none;">                
                <fieldset class="show">
                    <legend>Items List</legend>
                    <table id="items">
                        <thead>
                            <tr>
                                <th>Name</th>                
                                <th>Catalog No</th>                
                                <th style="width:70px">Quantity Type</th>
                                <th style="width:70px">Qty</th>
                                <th>Price in &#8377;</th>
                                <th>Subtotal in &#8377;</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <input type="text" id="item_0_name" name="item[0][name]" onkeyup="suggest(this.value, 0);" onblur="hidesuggest(0);" value="" autocomplete="off" />
                                <div class="suggestbox" id="suggestions0" style="display: none;"> 
                                    <div class="suggestlist" id="suggestionsList0"> &nbsp; </div>
                                </div>
                            </td>
                            <td><input type="text" id="item_0_code" name="item[0][code]" /></td>
                            <td>
                                <select id="item_0_qty_type" name="item[0][qty_type]">
                                    <option value=""></option>
                                    <option value="shop">Shop</option>
                                    <option value="godown">Godown</option>
                                </select>
                            </td>
                            <td><input style="width:70px" type="text" name="item[0][qty]" value="1" /></td>
                            <td><input type="text" id="data_item_0_price" name="item[0][price]" /></td>
                            <td><input type="text" id="data_item_0_subtotal" name="item[0][subtotal]" /></td>
                        </tr>
                        <tfoot>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="5">Subtotal</td>
                                    <td style="width: 125px;text-align: center">
                                        &#8377;<input type="text" name="subtotal" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="5">Transportation/Loading</td>
                                    <td style="width: 125px;text-align: center">
                                        &#8377;<input name="shipping" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="5">Tax</td>
                                    <td style="width: 125px;text-align: center">                                        
                                        &#8377;<input type="text" name="tax" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="5">Discount</td>
                                    <td style="width: 125px;text-align: center">
                                        &#8377;<input type="text" id="data_order_disc" name="discount" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="5">Grand Total</td>
                                    <td style="width: 125px;text-align: center">
                                        &#8377;<input type="text" name="grandtotal" value="" />
                                    </td>
                                </tr>
                            </tfoot>
                    </table>
                    <div style="text-align: left; padding-left: 10px;">
                        <input type="hidden" id="prodlastid" value="1" />
                        <a href="javascript:void(0)" onclick="addmore();">+&nbsp;Add more items</a>
                    </div>
                </fieldset>
            </div>
            <div style="text-align: center;">                
                <button class="button" type="submit" name="action" value="add">Save</button>                 
            </div>
            </form>        
        </div>
    </div>
</div>
    
    
{literal}
<script type="text/javascript">
    function addmore(){
        var i = $('#prodlastid').val();
        var html = "<tr>";
            html += '<td>';
            html += '   <input type="text" id="item_'+i+'_name" name="item['+i+'][name]" onkeyup="suggest(this.value,'+i+');" onblur="hidesuggest('+i+');" value="" autocomplete="off" />';
            html += '   <div class="suggestbox" id="suggestions'+i+'" style="display: none;">';
            html += '      <div class="suggestlist" id="suggestionsList'+i+'"> &nbsp; </div>';
            html += '    </div>';
            html += '</td>';
            html += '<td><input type="text" id="item_'+i+'_code" name="item['+i+'][code]" /></td>';
            html += '<td>';
            html +=         '<select id="item_'+i+'_qty_type" name="item['+i+'][qty_type]">';
            html +=             '<option value=""></option>';
            html +=             '<option value="shop">Shop</option>';
            html +=             '<option value="godown">Godown</option>';
            html +=         '</select>';
            html +=     '</td>';
            html += '<td><input style="width:70px" type="text" name="item['+i+'][qty]" value="1" /></td>';
            html += '<td><input type="text" id="data_item_'+i+'_price" name="item['+i+'][price]" /></td>';
            html += '<td><input type="text" id="data_item_'+i+'_subtotal" name="item['+i+'][subtotal]" /></td>';
            html += "</tr>";
        $('#items').append(html);
        i++;
        $('#prodlastid').val(i);
    }
</script>
{/literal}