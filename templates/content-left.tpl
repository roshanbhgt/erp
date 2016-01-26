<div class="content-left">
    {include file='left.tpl'}
</div>
<div class="content-right">
    <div id="toolbar">{$toolbar}</div>
    {if $message != ''}
        <div id="mesage">{$message}</div>
    {/if}
    {$content}
</div>

