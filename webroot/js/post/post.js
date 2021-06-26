function PostData ( data )
{
    if ( !data )
    {
        Response( "<div class='message error'>Ajax:データがありません</div>", 'html' );
    } else
    {
        ajaxData = AjaxMain( '', null, '', 'POST', {post: data}, 'json', Response );

    }
}

function Response ( jsonData, type )
{
    if ( type === 'html' )
    {
        $( '.jsForm' ).html( jsonData );
    } else
    {
        result = 'Ajax: ';
        for ( var item in jsonData )
        {
            result += jsonData[item];
        }
        jsonData = result;
        $( '.jsForm' ).val( jsonData );
    }
}