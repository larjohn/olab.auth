<table width="100%" height="100%">
    <tr>
        <td valign="top" bgcolor="#bbbbcb">
            <h4>Create group</h4>
            <table width="100%" cellpadding="6">
                <tr bgcolor="#ffffff"><td>
            <form action=<?php echo URL::base().'usermanager/saveNewGroup'; ?> method="post">
                <table>
                    <tr><td align="left"><p>group name</p></td>
                        <td align="left"><input type="text" name="groupname" size="50" value=""></td></tr>

                    <tr><td align="left"><p>&nbsp;</p></td><td align="left">
                            <input type="submit" name="AddGroupSubmit" value="submit"></td></tr>
                </table>
            </form>
                    </td></tr>
            </table>
        </td>
    </tr>
</table>