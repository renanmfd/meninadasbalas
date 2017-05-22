BASEPATH=${PWD};
MYSQL_USER="root"
MYSQL_PSWD="res2res2"
MYSQL_TABLE="meninadasbalas"
SITENAME=$MYSQL_TABLE;
DATE=$(date "+%Y-%m-%d-%H-%M-%S")

mkdir -p backup/file
mkdir -p backup/database

#echo $BASEPATH
DUMPNAME="$SITENAME-$DATE.sql"
cd "$BASEPATH/backup/database/"
mysqldump -u$MYSQL_USER -p$MYSQL_PSWD $MYSQL_TABLE > $DUMPNAME
zip -r -q "$DUMPNAME.zip" $DUMPNAME
rm $DUMPNAME

cd "$BASEPATH/web/sites/default/";
FILENAME="$BASEPATH/backup/file/$SITENAME-$DATE.zip"
zip -r -q $FILENAME files/
cd $BASEPATH

