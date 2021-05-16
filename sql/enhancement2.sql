
--Query 1
INSERT INTO clients( clientFirstname, clientLastname, clientEmail, clientPassword, comment ) 
VALUES ( 'Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman' ); 

--Query 2
UPDATE clients SET clientLevel = 3 WHERE clientEmail = 'tony@starkent.com'

--Query 3
Update inventory
Set invDescription = replace(invDescription, 'small interior', 'spacious interior') WHERE invMake = "GM" AND invModeL = "HUMMER";

--Query 4
SELECT invModel, classificationName  FROM inventory t0
JOIN carclassification t1 ON t0.classificationId = t1.classificationId
WHERE t1.classificationName = 'SUV'

--Query 5
DELETE FROM inventory WHERE invMake = 'Jeep' and invModel = 'Wrangler'

--Query 6
UPDATE inventory SET invImage = concat('/phpmotors',invImage) , invThumbnail = concat('/phpmotors',invImage)


