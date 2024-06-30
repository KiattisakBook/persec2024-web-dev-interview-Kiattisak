SELECT year(orders.shipped_date) as year,ROUND(SUM( (order_details.quantity * products.unit_price) - order_details.discount )) as total FROM orders
INNER JOIN order_details ON order_details.order_id = orders.order_id
INNER JOIN products ON products.product_id = order_details.product_id
INNER JOIN employee_territories ON employee_territories.employee_id = orders.employee_id
INNER JOIN territories ON territories.territory_id = employee_territories.territory_id
WHERE territories.region_id = 2 and orders.shipped_date is not NULL
GROUP BY year(orders.shipped_date)