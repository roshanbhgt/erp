<div>Edit <strong>{$company.company}</strong></div>
<form action="{$FRONTEND}editaccount.php" method="post">
    <input type="hidden" name="id" value="{$company.id}" />
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" value="{$company.firstname}" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname" value="{$company.lastname}" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="{$company.email}" /></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><input type="text" name="company" value="{$company.company}" /></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="{$company.username}" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{$company.password}" /></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="update" value="Update"/></td>
        </tr>
    </table>
</form>