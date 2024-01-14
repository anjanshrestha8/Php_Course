<?xml version="1.0" encoding="UTF-8"?>

<!-- syntax -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/user">
        <html>
            <body>
                <h1>User</h1>
                <p>
                    <xsl:value-of select="firstname" /> 
                </p>
                <p>
                    <xsl:value-of select="lastname" />
                </p>

            </body>
        </html>
        
    </xsl:template>
    
    
</xsl:stylesheet>