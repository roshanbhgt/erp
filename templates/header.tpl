<div class="header-container">    
    <div class="logo">        
        <h1>Billing and Inventory Management</h1>    
    </div>    
    {if $session.adminid != ''}    
    <div class="quik-link">        
        <ul>
            <li><a href="#">{$smarty.now|date_format:"%A, %B %e, %Y"}</a></li>
            <li>&nbsp;|&nbsp;</li>       
            {*<li><a href="#">Settings</a></li>            
            <li>&nbsp;|&nbsp;</li>            
            <li><a href="#">Help</a></li>            
            <li>&nbsp;|&nbsp;</li>         *}   
            <li><a href="{$FRONTEND}logout.php">Logout</a></li>        
        </ul>    
    </div>    
    {/if}
</div>