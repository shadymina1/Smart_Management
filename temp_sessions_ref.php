<?php
        $_SESSION["fname"]= ucfirst($gettingData["emFName"]);// loged in user first name
        $_SESSION['jid']=$gettingData['jid'];// loged in user job ID 
        $_SESSION["title"]=$gettingData["title"];// loged in user title
        $_SESSION["q_create"]=$gettingData["q_create"];// loged in user permission to create quotations (or not)
        $_SESSION["q_read"]=$gettingData["q_read"];// loged in user permission to read quotations (or not)
        $_SESSION["q_update"]=$gettingData["q_update"];// loged in user permission to update quotations (or not)
        $_SESSION["q_delete"]=$gettingData["q_delete"];// loged in user permission to delete quotations (or not)
        $_SESSION["inv_read"]=$gettingData["inv_read"];// loged in user permission to read invoices (or not)
        $_SESSION["inv_issue"]=$gettingData["inv_issue"];// loged in user permission to issue invoices (or not)
        $_SESSION["inv_cancel"]=$gettingData["inv_cancel"];// loged in user permission to cancel (not delete) invoices (or not)
        $_SESSION["emp_create"]=$gettingData["emp_create"];// loged in user permission to creat new emlployees (or not)
        $_SESSION["emp_main_read"]=$gettingData["emp_main_read"];// loged in user permission to read employees info eccept wage (or not)
        $_SESSION["emp_wage_read"]=$gettingData["emp_wage_read"];// loged in user permission to read employees info including wage (or not)
        $_SESSION["emp_is_active"]=$gettingData["emp_is_active"];// loged in user permission to activate/deactivate employees (or not)
        $_SESSION["emp_update"]=$gettingData["emp_update"];// loged in user permission to update employees info (or not)
        $_SESSION["prod_create"]=$gettingData["prod_create"];// loged in user permission to ceate new products (or not)
        $_SESSION["prod_main_read"]=$gettingData["prod_main_read"];// loged in user permission to read products info eccept cost (or not)
        $_SESSION["prod_cost_read"]=$gettingData["prod_cost_read"]; //loged in user permission to read products info including cost (or not)
        $_SESSION["prod_mainx_update"]=$gettingData["prod_mainx_update"];// loged in user permission to ptoducts info (or not)
        $_SESSION["prod_active_delete"]=$gettingData["prod_active_delete"];// loged in user permission to delete and/or deactivate products (or not)
        $_SESSION["client_create"]=$gettingData["client_create"];// loged in user permission to create new clients (or not)
        $_SESSION["client_read"]=$gettingData["client_read"];// loged in user permission to read clints info (or not)
        $_SESSION["client_main_update"]=$gettingData["client_main_update"];// loged in user permission to update clients info (or not)
        $_SESSION["client_active_update"]=$gettingData["client_active_update"];// loged in user permission to activate/deactivate clients (or not)
        $_SESSION["client_delete"]=$gettingData["client_delete"];// loged in user permission to delete clients (or not)
        $_SESSION["sup_create"]=$gettingData["sup_create"];// loged in user permission to create new suppliers (or not)
        $_SESSION["sup_read"]=$gettingData["sup_read"];// loged in user permission to read suppliers info (or not)
        $_SESSION["sup_main_update"]=$gettingData["sup_main_update"];// loged in user permission to aupdate suppliers info (or not)
        $_SESSION["sup_is_active"]=$gettingData["sup_is_active"];// loged in user permission to activate/deactivate suppliers (or not) 
        $_SESSION["sup_delete"]=$gettingData["sup_delete"];// loged in user permission to delete suppliers (or not)
        $_SESSION["permissions_ctrl"]=$gettingData["permissions_ctrl"];// loged in user permission to change jobs permissions (or not)
        $_SESSION["is_active"]=$gettingData["is_active"];// loged in user is active (or not)
$con->close();
?>