<div class="left">
    <div id="navigation">
        <div style="font-size: 11px; overflow: hidden;" id="status">Logged In: {$session.firstname}&nbsp;{$session.lastname}</a></div>
        <ul>
            <li>
                <ul>
                    <li class="heading dashboard">Dashboard</li>
                    <li><div class="nav-item"><a class="active" href="{$FRONTEND}dashboard.php">My Dashboard</a></div></li>
                    <li><div class="nav-item"><a class="" href="{$FRONTEND}account.php">Account Information</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}billinginfo.php?action=new&id=1">+</a><a class="" href="{$FRONTEND}billinginfo.php">Address Book</a></div></li>                        
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading accounts">Accounts</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}customer.php?action=new">+</a><a class="" href="{$FRONTEND}customer.php">Customer List</a></div></li>
                    <li><div class="nav-item"><a class="" href="{$FRONTEND}custrevenue.php">Customer Revenue</a></div></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading inventory">Inventory</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}inventory.php?action=new">+</a><a class="" href="{$FRONTEND}inventory.php">Products List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}category.php?action=new">+</a><a class="" href="{$FRONTEND}category.php">Category List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}purchasebills.php?action=new">+</a><a class="" href="{$FRONTEND}purchasebills.php">Purchase Bills</a></div></li>
                    <a href="../config/constants.php"></a>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading billing">Orders</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}order.php?action=new&id=1">+</a><a class="" href="{$FRONTEND}order.php">Delivery Chalan</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}invoice.php?action=new&id=1">+</a><a class="" href="{$FRONTEND}invoice.php">Invoice List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="{$FRONTEND}cashmemo.php?action=new&id=1">+</a><a class="" href="{$FRONTEND}cashmemo.php">Cash Memo</a></div></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading reports">Reports</li>
                    <li><div class="nav-item"><a class="" href="{$FRONTEND}report.php?action=financial">Financial Report</a></div></li>
                    <li><div class="nav-item"><a class="" href="{$FRONTEND}report.php?action=salesitem">Sold Items Report</a></div></li>
                    <li><div class="nav-item"><a class="" href="{$FRONTEND}report.php?action=customer">Customer Revenue</a></div></li>
                </ul>
            </li>
        </ul>
    </div>
</div>