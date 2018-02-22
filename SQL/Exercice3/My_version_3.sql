USE test;
SELECT * FROM test.orders;
UPDATE orders SET description="NC" WHERE agent_code="A002";
DELETE from orders WHERE customer_code="C00022" AND DESCRIPTION="NC";
SELECT CUSTOMER_CODE="C00022" FROM test.orders;