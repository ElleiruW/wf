SELECT * FROM test.orders;
SELECT agent_code, SUM(amount), COUNT(id) FROM orders WHERE amount>=1000 GROUP BY agent_code ORDER BY AVG(amount) DESC;