#import "c:\Program Files\Common Files\System\ADO\msado15.dll" \
no_namespace rename("EOF", "EndOfFile")
// This code comes from : www.geocities.com/mokarrabin
#include <stdio.h>
#include <iostream.h>

int ReadMDB(PSTR pDBPath,PSTR pUser,PSTR pPwd,PSTR pTable)


    {
    CoInitialize(NULL);
    try 


        {
        _RecordsetPtr pRst("ADODB.Recordset");
        // Connection String
        _bstr_t strCnn("DRIVER={Microsoft Access Driver (*.mdb)};UID=admin;DBQ=GBOOK.mdb");
        	 // Open table
        	pRst->Open("SELECT * FROM ProductService where ProductService like '%samir%';", strCnn, adOpenStatic, adLockReadOnly, adCmdText);
        	 
        	 pRst->MoveFirst();


            	 while (!pRst->EndOfFile) {
            		 cout<<(char*) ((_bstr_t) pRst->GetFields()->GetItem("ProductService")->GetValue())<<endl;
            		 pRst->MoveNext();
            	 }
            	 pRst->Close(); 
            	 
        }
        catch (_com_error &e)


            {
            cout<<(char*) e.Description();
        }
        ::CoUninitialize();

return TRUE;
    }
 