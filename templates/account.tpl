<div class="dashboard">
    <div class="column-2">
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;"><h2 class="dashboard">Business Contact</h2></span>
                <p style="padding:20px 0px 0px 0px; color:#999;line-height: 18px;padding: 35px 0 0;">
                    {$billing.firstname}&nbsp;{$billing.lastname}<br/>
                    {$billing.company}<br/>
                    {$billing.address1}<br/>
                    {$billing.address2}<br/>
                    {$billing.address3}<br/>
                    {$billing.city},{$billing.state},{$billing.country}-{$billing.postcode}<br/>
                    T: {$billing.telephone},&nbsp; F: {$billing.fax}<br/>
                </p>                
            </div>
        </div>
    </div>
    <div class="column-1">
        <div class="activity">
            <div class="head">
                <span class="heading">
                    Welcome <strong>{$company.company}</strong>!
                </span>
            </div>
            <ul class="activity-feed">
                <p style="color: #999;" class="note">
                    {$company.firstname}&nbsp;{$company.lastname}<br/>
                    {$company.email}
                </p>                
            </ul>
        </div>
    </div>
</div>
