<form accept-charset="utf-8" method="post" id="saveitemform" action="">
    <fieldset class="show">
        <legend>Items List</legend>
        <table id="items">
            <tr>
                <th>Name</th>
                <th>Catalog No.</th>
                <th>Quantity Type</th>
                {*<th>Price in &#8377;</th>*}
                <th>Qty</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="data_item_0_name" name="data[Item][0][name]" onkeyup="suggest(this.value, 0);" onblur="hidesuggest(0);" value="" autocomplete="off" />
                    <div class="suggestbox" id="suggestions0" style="display: none;"> 
                        <div class="suggestlist" id="suggestionsList0"> &nbsp; </div>
                    </div>
                </td>
                <td><input type="text" id="data_item_0_code" name="data[Item][0][code]" /></td>
                {*<td><input type="text" id="data_item_0_price" name="data[Item][0][price]" /></td>*}
                <td>
                    <select id="data_item_0_qty_type" name="data[Item][0][qty_type]">
                        <option value=""></option>
                        <option value="shop">Shop</option>
                        <option value="godown">Godown</option>
                    </select>
                </td>
                <td><input type="text" name="data[Item][0][qty]" value="1"/></td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="data_item_1_name" name="data[Item][1][name]"  onkeyup="suggest(this.value, 1);" onblur="hidesuggest(1);" value="" autocomplete="off"/>
                    <div class="suggestbox" id="suggestions1" style="display: none;"> 
                        <div class="suggestlist" id="suggestionsList1"> &nbsp; </div>
                    </div>
                </td>
                <td><input type="text" id="data_item_1_code" name="data[Item][1][code]" /></td>
                {*<td><input type="text" id="data_item_1_price" name="data[Item][1][price]" /></td>*}
                <td>
                    <select id="data_item_1_qty_type" name="data[Item][1][qty_type]">
                        <option value=""></option>
                        <option value="shop">Shop</option>
                        <option value="godown">Godown</option>
                    </select>
                </td>
                <td><input type="text" name="data[Item][1][qty]" value="1"/></td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="data_item_2_name" name="data[Item][2][name]" onkeyup="suggest(this.value, 2);" onblur="hidesuggest(2);" value="" autocomplete="off" />
                    <div class="suggestbox" id="suggestions2" style="display: none;"> 
                        <div class="suggestlist" id="suggestionsList2"> &nbsp; </div>
                    </div>
                </td>
                <td><input type="text" id="data_item_2_code" name="data[Item][2][code]" /></td>
                <td>
                    <select id="data_item_2_qty_type" name="data[Item][2][qty_type]">
                        <option value=""></option>
                        <option value="shop">Shop</option>
                        <option value="godown">Godown</option>
                    </select>
                </td>
                {*<td><input type="text" id="data_item_2_price" name="data[Item][2][price]" /></td>*}
                <td><input type="text" name="data[Item][2][qty]" value="1"/></td>
            </tr>
        </table>
        <div style="text-align: left; padding-left: 10px;">
            <input type="hidden" id="prodlastid" value="3" />
            <a href="javascript:void(0)" onclick="addmore();">+&nbsp;Add more items</a>
        </div>
    </fieldset>
    <div class="check"></div>
    <div style="text-align: center;">
        <div class="input checkbox"><input type="hidden" id="ItemsAdd" name="data[action]" value="saveitem" /></div>                
        <button class="button" type="submit" id="saveitem" onclick="saveItems()">Next</button> 
        <span class="cancel">or <a class="close-dialog" href="{$FRONTEND}order.php"">Cancel</a></span>
    </div>
</form>

{literal}
<script type="text/javascript">
    function addmore(){
        var i = $('#prodlastid').val();
        var html = "<tr>";
            html += '<td>';
            html += '   <input type="text" id="data_item_'+i+'_name" name="data[Item]['+i+'][name]" onkeyup="suggest(this.value,'+i+');" onblur="hidesuggest('+i+');" value="" autocomplete="off" />';
            html += '   <div class="suggestbox" id="suggestions'+i+'" style="display: none;">';
            html += '      <div class="suggestlist" id="suggestionsList'+i+'"> &nbsp; </div>';
            html += '    </div>';
            html += '</td>';
            html += '<td><input type="text" id="data_item_'+i+'_code" name="data[Item]['+i+'][code]" /></td>';
            /*html += '<td><input type="text" id="data_item_'+i+'_price" name="data[Item]['+i+'][price]" /></td>';*/
            html += '<td>';
            html +=         '<select id="data_item_'+i+'_qty_type" name="data[Item]['+i+'][qty_type]">';
            html +=             '<option value=""></option>';
            html +=             '<option value="shop">Shop</option>';
            html +=             '<option value="godown">Godown</option>';
            html +=         '</select>';
            html +=     '</td>';
            html += '<td><input type="text" name="data[Item]['+i+'][qty]" value="1"/></td>';
            html += "</tr>";
        $('#items').append(html);
        i++;
        $('#prodlastid').val(i);
    }
    function suggest(keyword,i){
	if(keyword.length == 0) {
            $('#suggestions'+i).fadeOut();
	} else {
	$.ajax({
            url: "autosuggest.php",
            data: 'action=suggestprod&keyword='+keyword+'&id='+i,
            success: function(msg){
                if(msg.length >0) {
                        $('#suggestions'+i).fadeIn();
                        $('#suggestionsList'+i).html(msg);
                }
            }
	});
	}
    }
    function hidesuggest(i){
        $('#suggestions'+i).fadeOut();
    }
    function fillname(thisValue,i) {
        $('#data_item_'+i+'_name').val(thisValue);
    }
    function fillcode(thisValue,i) {
        $('#data_item_'+i+'_code').val(thisValue);
    }
    function fillprice(thisValue,i) {
        $('#data_item_'+i+'_price').val(thisValue);
    }
</script>
{/literal}
