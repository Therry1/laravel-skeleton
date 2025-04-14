const makeSeachable = ({element, searchUrl, addable = false, placeholder = "Faites un choix...", defaultValue=null, resultCallback=null}) => {
    $(element).select2({
        tags: addable,
        createTag: function (params) {
            var term = $.trim(params.term);
            if (term === '') {
                return null;
            }
            return {
                id: term,
                text: term,
                newTag: true
            }
        },
        placeholder: placeholder,
        dataType: 'json',
        ajax: {
            url: searchUrl,
            processResults: resultCallback || function (data) {
                return {
                    results: data.data.map(item => {
                        return {
                            id: item.id,
                            text: item.name
                        }
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 3,
        delay: 250
    });
}

