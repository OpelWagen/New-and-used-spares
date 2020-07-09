ERROR - 2020-07-09 04:30:54 --> Could not find the language line "common_cong_no (TBD)"
ERROR - 2020-07-09 04:30:58 --> Could not find the language line "customers_total_due (TBD)"
ERROR - 2020-07-09 04:31:28 --> Could not find the language line "common_cong_no (TBD)"
ERROR - 2020-07-09 04:35:48 --> Could not find the language line "common_cong_no (TBD)"
ERROR - 2020-07-09 04:35:58 --> Could not find the language line "common_cong_no (TBD)"
ERROR - 2020-07-09 04:36:01 --> Could not find the language line "customers_total_due (TBD)"
ERROR - 2020-07-09 04:37:51 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 04:41:47 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 22:47:04 --> Could not find the language line "common_cong_no (TBD)"
ERROR - 2020-07-09 22:47:09 --> Could not find the language line "customers_total_due (TBD)"
ERROR - 2020-07-09 22:52:37 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 22:58:52 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 23:12:52 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 23:13:06 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:13:06 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:13:08 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:13:08 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:13:52 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:13:52 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:15:05 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:15:05 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:19:28 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:19:28 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:19:28 --> Severity: Notice --> Undefined variable: total_due C:\wamp64\www\thannong\application\views\sales\receipt_default.php 198
ERROR - 2020-07-09 23:19:38 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:19:38 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:21:15 --> Severity: Notice --> Undefined variable: customer_id C:\wamp64\www\thannong\application\controllers\Sales.php 1147
ERROR - 2020-07-09 23:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `sales`.due_status = 1
				GROUP BY `sales`.`customer_id`
			) -  IFNULL((' at line 5 - Invalid query: SELECT *, ( (
				SELECT SUM(`sales_payments`.payment_amount)
				FROM `ospos_sales` AS `sales`
				JOIN `ospos_sales_payments` as `sales_payments`  ON `sales`.`sale_id` = `sales_payments`.`sale_id`
				WHERE `sales`.`customer_id` =  AND `sales`.due_status = 1
				GROUP BY `sales`.`customer_id`
			) -  IFNULL((
				SELECT SUM(`sales_payments`.payment_amount)
				FROM `ospos_sales` AS `sales`
				JOIN `ospos_sales_payments` as `sales_payments`  ON `sales`.`sale_id` = `sales_payments`.`sale_id`
				WHERE `sales`.`customer_id` =   AND `sales`.due_status = 2
				GROUP BY `sales`.`customer_id`
				), 0)
			
			) AS total
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
WHERE `ospos_sales`.`customer_id` IS NULL
ERROR - 2020-07-09 23:21:42 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:21:42 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:21:58 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:21:58 --> Could not find the language line "module_attributes (TBD)"
ERROR - 2020-07-09 23:22:05 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:05 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:05 --> Could not find the language line "module_cashups_desc (TBD)"
ERROR - 2020-07-09 23:22:05 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:08 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:08 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:08 --> Could not find the language line "reports_sales_taxes (TBD)"
ERROR - 2020-07-09 23:22:08 --> Could not find the language line "reports_sales_taxes (TBD)"
ERROR - 2020-07-09 23:22:11 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:11 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:12 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:12 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:17 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:17 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:19 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:19 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:19 --> Could not find the language line "reports_sales_taxes (TBD)"
ERROR - 2020-07-09 23:22:19 --> Could not find the language line "reports_sales_taxes (TBD)"
ERROR - 2020-07-09 23:22:23 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:23 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:26 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:26 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:57 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:22:57 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "sales_invoice_type_invoice (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "sales_invoice_type_tax_invoice (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "sales_invoice_type_custom_invoice (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "sales_invoice_type_custom_tax_invoice (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_integrations_configuration (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_integrations (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_default_receivings_discount (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_multi_pack_enabled (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_include_hsn (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_tax_id (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_use_destination_based_tax (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_default_tax_code (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_default_tax_category (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_default_tax_jurisdiction (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_currency_code (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_invoice_type (TBD)"
ERROR - 2020-07-09 23:25:51 --> Could not find the language line "config_ospos_info (TBD)"
ERROR - 2020-07-09 23:25:51 --> Severity: Warning --> fileperms(): stat failed for ../public/uploads/item_pics/ C:\wamp64\www\thannong\application\views\configs\system_info.php 80
ERROR - 2020-07-09 23:28:06 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:28:06 --> Could not find the language line "module_cashups (TBD)"
ERROR - 2020-07-09 23:28:06 --> Could not find the language line "reports_sales_taxes (TBD)"
ERROR - 2020-07-09 23:28:06 --> Could not find the language line "reports_sales_taxes (TBD)"
