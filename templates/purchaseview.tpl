<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Purchase Bill #{$purchase.chalan}</h3>
        </div>
        <div class="content">
            <div id="cart">
                {if count($purchase)>0}
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;line-height: 20px;" class="std billing">
                    <h3>Purchase Information</h3>
                    <ul>
                        <li><b>Name:</b> {$purchase.name}</li>                        
                        <li><b>Address:</b> {$purchase.address}</li>                       
                        <li><b>Purchase Date:</b> {$purchase.purchaseat}</li>                       
                    </ul>
                </div>
                {/if}
                
                <div style="float:left; width:100%;padding:15px 0;">
                    <h3>Items List </h3>
                    {if count($purchaseitem)>0}
                    <table id="item-table" border="1">
                        <thead>
                            <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                            <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                            <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                            <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                            <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;text-align: right;">Rate</th>
                            <th style="width: 125px;text-align: right;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>
                        </thead>
                        {$i=1}
                        {foreach $purchaseitem as $val}
                        <tr>
                            <td style="border-right:1px solid #000;text-align: center">{$i++}</td>
                            <td style="border-right:1px solid #000;text-align: left;">{$val.name}</td>
                            <td style="border-right:1px solid #000;text-align: center;">{$val.sku}</td>
                            <td style="border-right:1px solid #000;text-align: center;">{$val.qty}</td>
                            <td style="border-right:1px solid #000;text-align: right;">&#8377;&nbsp;{$val.price|round:"2"}</td>
                            <td style="text-align: right">&#8377;&nbsp;{$val.subtotal|round:"2"}</td>
                        </tr>
                        {/foreach}
                        <tfoot>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Subtotal</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;{$purchase.subtotal|round:"2"}</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Transportation/Loading</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;{$purchase.shipping|round:"2"}</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Tax (12.5%)</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;{$purchase.tax|round:"2"}</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Discount</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;{$purchase.discount|round:"2"}</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Grand Total</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;{$purchase.total|round:"2"}</td>
                            </tr>
                        </tfoot>
                    </table>
                    {else}
                        Your have no items to purchase.
                    {/if}
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
            <button class="button" type="submit" id="saveitem" onclick="window.open('{$FRONTEND}invoice.php?action=printinvoice&id={$order.id}')">Print Invoice</button>
        </div>
    </div>
</div>