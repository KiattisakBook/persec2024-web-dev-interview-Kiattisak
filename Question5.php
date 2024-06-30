SELECT products.product_name,SUM(order_details.quantity) as totalqty FROM orders
INNER JOIN order_details ON order_details.order_id = orders.order_id
INNER JOIN products ON products.product_id = order_details.product_id
WHERE orders.order_date LIKE '%2016-%'
GROUP BY products.product_name
ORDER BY totalqty desc
LIMIT 5;