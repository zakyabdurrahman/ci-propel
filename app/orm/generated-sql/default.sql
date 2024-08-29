
BEGIN;

-----------------------------------------------------------------------
-- news
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "news" CASCADE;

CREATE TABLE "news"
(
    "id" serial NOT NULL,
    "headline" VARCHAR(255) NOT NULL,
    PRIMARY KEY ("id")
);

COMMIT;
