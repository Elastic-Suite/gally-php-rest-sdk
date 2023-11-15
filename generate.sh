#!/bin/bash

# You can get swagger codegen jar from https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.30/swagger-codegen-cli-2.4.30.jar
java -jar swagger-codegen-cli-2.4.30.jar generate \
	-D io.swagger.parser.util.RemoteUrl.trustAll=true \
	-i https://gally.localhost/docs.json\?spec_version\=2 \
	-l php \
	-o ./test/ \
	-c swagger-codegen.config.json

rm -rf src/Gally/Rest
mv test/gally-php/src/Rest src/Gally/
rm -rf test/
