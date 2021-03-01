var data = {

    "kirovograd": {
        "trial": 980,
        "oneoff": {
            "large_pool": 1850,
            "small_pool": 1500
        },
        "4": {
            "individual": {
                "standard": {
                    "large_pool": 6800,
                    "small_pool": 5600
                },
                "loyal": {
                    "large_pool": 8000,
                    "small_pool": 6800
                }
            },
            "group": {
                "strict": 4400,
                "standard": 6000,
                "loyal": 7200
            }
        },
        "8": {
            "individual": {
                "standard": {
                    "large_pool": 11800,
                    "small_pool": 9900
                },
                "loyal": {
                    "large_pool": 14000,
                    "small_pool": 11800
                }
            },
            "group": {
                "strict": 7600,
                "standard": 10500,
                "loyal": 12600
            }
        },
        "12": {
            "individual": {
                "standard": {
                    "large_pool": 16200,
                    "small_pool": 13500
                },
                "loyal": {
                    "large_pool": 19200,
                    "small_pool": 16200
                }
            },
            "group": {
                "strict": 10800,
                "standard": 14400,
                "loyal": 17200
            }
        },
    },


    "vinokurova": {
        "trial": 980,
        "oneoff": {
             "large_pool": 1850,
            "small_pool": 1500
        },
        "4": {
            "individual": {
                "standard": {
                   "large_pool": 6800,
                    "small_pool": 5600
                },
                "loyal": {
                     "large_pool": 8000,
                    "small_pool": 6800
                }
            },
            "group": {
                "strict": 4400,
                "standard": 6000,
                "loyal": 7200
            }
        },
        "8": {
            "individual": {
                "standard": {
                    "large_pool": 11800,
                    "small_pool": 9900
                },
                "loyal": {
                    "large_pool": 14000,
                    "small_pool": 11800
                }
            },
            "group": {
                "strict": 7600,
                "standard": 10500,
                "loyal": 12600
            }
        },
        "12": {
            "individual": {
                "standard": {
                    "large_pool": 16200,
                    "small_pool": 13500
                },
                "loyal": {
                    "large_pool": 19200,
                    "small_pool": 16200
                }
            },
            "group": {
                "strict": 10800,
                "standard": 14400,
                "loyal": 17200
            }
        },
    },

    "myachkovsky_boulevard": {
        "trial": 980,
        "oneoff": 1500,
        "4": {
            "standard": 5600,
            "loyal": 6800
        },
        "8": {
            "standard": 9900,
            "loyal": 11800
        },
        "12": {
            "standard": 13500,
            "loyal": 16200
        }
    },

    "lubertci": {
        "trial": 980,
        "oneoff": 1500,
        "4": {
            "standard": 5600,
            "loyal": 6800
        },
        "8": {
            "standard": 9900,
            "loyal": 11800
        },
        "12": {
            "standard": 13500,
            "loyal": 16200
        }
    },
};

var descriptions = {
    "quantity": {
        "trial": '<span class=\"medium\">Пробное занятие</span> предусмотрено для всех новых посетителей нашего акваклуба. Длительность занятия составляет: 30 минут. Проходит индивидуально с тренером.',
        "oneoff": '<span class=\"medium\">Разовое занятие</span> предусмотрено для тех, кто уже посещал занятия. Отмена и перенос занятия до 18:00 предыдущего дня. Уведомление о смене тренера не предусмотрено',
        "4": '<span class=\"medium\">Абонемент на 4 занятия</span> предусматривает 1 занятие в неделю.',
        "8": '<span class=\"medium\">Абонемент на 8 занятий</span> предусматривает 2 занятия в неделю.',
        "12": '<span class=\"medium\">Абонемент на 12 занятий</span> предусматривает 3 занятия в неделю.'
    },
    "type_of_occupation": {
        "individual": '<span class="medium">Индивидуальные занятия</span> проходят индивидуально с тренером. Длительность занятия составляет: 30 минут.',
        "group": '<span class=\"medium\">Групповые занятия</span> проходят в группе от 2 до 4 человек. Длительность занятия составляет: 45 минут.'
    },
    "type_of_subscription": {
        "strict": '<span class=\"medium\">Абонемент “Строгий”</span> не предусматривает уведомление о смене тренера. Срок действия абонемента: 4 недели, без возможности переноса занятий.',
        "standard": '<span class=\"medium\">Абонемент “Стандарт”</span> предусматривает отмену занятия до 18.00 предыдущего дня. Срок действия абонемента: 4 недели + 2 недели заморозки. Уведомление о смене тренера не предусмотрено.',
        "loyal": '<span class=\"medium\">Абонемент “Лояльный”</span> позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. Срок действия абонемента: 4 недели + 2 недели заморозки.'
    },
    "swimming_pool": {
        "small_pool": '<span class=\"medium\">Маленький бассейн </span> предназначен для индивидуальных занятий. Представляет собой круглый каркасный бассейн, диаметром - 3м, глубиной - 1,2м.',
        "large_pool": '<span class=\"medium\">Большой бассейн</span> предназначен для групповых и индивидуальных занятий. Представляет собой прямоугольный бассейн, размерами: длина и ширина - 6х3м, глубина - 1,2м.'
    }

};

var Variables = {
    'lubertci_bt_2': null,
};

var Payment = {

    'descriptions': function () {
        jQuery(document).ready(function ($) {

            function load_description() {
                var description_cases = $("section[id='price'] form div[class='description'] p[class='note']");

                description_cases.each(function (index, element) {

                    var parent = $(element).parents("div[class~='section']").attr("id");
                    var inputs = $(element).parent().siblings(".flex-row").find("input");

                    inputs.each(function (i, e) {
                        var active = false;

                        if (e.checked) {
                            active = $(e).attr('value');
                            $(element).html(descriptions[parent][active]);
                        }
                    });
                });
            };

            load_description();

            var inputs = $("section[id='price'] form input[type='radio']");

            $(inputs).each(function (i, e) {
                $(e).click(function () {
                    load_description();
                })
            })
        });
    },

    'hide_items_checked': function () {
        jQuery(document).ready(function ($) {

            function hide_items() {

                var streets_cases = $("section[id='price'] form div[class='top'] div[class='title']");

                $(streets_cases).each(function (indexSC, street_case) {

                    var type_of_subscription_case = $(street_case).parent().next("div[class='content']").find("div[class~='type_of_subscription']");
                    var type_of_occupation_case = $(street_case).parent().next("div[class='content']").find("div[class~='type_of_occupation']");
                    var swimming_pool_case = $(street_case).parent().next("div[class='content']").find("div[class~='swimming_pool']");

                    var street_name = street_case.id;                   /// Название улицы
                    var quantity_inputs = $(street_case).parent().next("div[class='content']:first").find("div[class~='quantity'] input");
                    var type_of_occupation_inputs = $(street_case).parent().next("div[class='content']:first").find("div[class~='type_of_occupation'] input");

                    $(quantity_inputs).each(function (indexQI, quantity_input) {

                        var quantity_value = quantity_input.value;        /// Количество занятий

                        if (quantity_input.checked) {

                            if (typeof data[street_name][quantity_value] !== 'object') {

                                $(type_of_subscription_case).hide();
                                $(type_of_occupation_case).hide();
                                $(swimming_pool_case).hide();
                                $(street_case).parent().next("div[class='content']").find("div[class~='section']").next("div").addClass('list-hidden');

                            }

                            if (street_case.id === 'kirovograd' || street_case.id === 'vinokurova') {

                                switch (quantity_value) {
                                    case 'oneoff':
                                        $(type_of_subscription_case).hide();
                                        $(type_of_occupation_case).hide();
                                        $(street_case).parent().next("div[class='content']").find("div[class~='section']").next("div").removeClass('list-hidden');
                                        break;
                                    case '4':
                                    case '8':
                                    case '12':
                                        $(type_of_occupation_inputs).each(function (index, type_of_occupation) {

                                            if (type_of_occupation.checked) {
                                                switch (type_of_occupation.value) {
                                                    case 'individual':
                                                        swimming_pool_case.insertAfter(type_of_occupation_case);
                                                        var type_of_subscription_strict = $(type_of_subscription_case).find("div[class='item-radio']:first");
                                                            $(type_of_subscription_strict).hide();
                                                            $(type_of_subscription_case).find("span").each(function (index, element) {
                                                                $(element).addClass('width-two');
                                                            });
                                                            $(type_of_subscription_case).find("input[value='standard']").prop("checked", true);

                                                        break;
                                                    case 'group':
                                                        swimming_pool_case.insertAfter(type_of_subscription_case);
                                                        $(swimming_pool_case).hide();
                                                        break;
                                                }
                                            }
                                        });
                                        break;
                                }

                            }
                        }
                    });

                });
            }

            hide_items();

        });
    },

    'hide_items_click': function () {
        jQuery(document).ready(function ($) {

            function show(element) {
                var id = $(element)[0].id;

                switch (id) {
                     case 'type_of_occupation':
                        $(element).delay(100).fadeIn(1000);     //Вид занятий
                        break;
                    case 'swimming_pool':
                        $(element).delay(150).fadeIn(1000);     //Бассейн
                        break;
                    case 'type_of_subscription':
                        $(element).delay(200).fadeIn(1000);     //Вид абонемента
                        break;

                }
            }

            var all_inputs = $("section[id='price'] form input[type='radio']");
            var previous_quantity_value = $("section[id='price'] form div[class~='quantity'] input:radio:checked").attr("value");

            function hide_show_items(target = false) {

                var street_case = $(target).parents("div[class='content']").prev("div[class~='top']").find("div[class='title']:first");
                var street_name = street_case[0].id;        /// Название улицы
                var group_name = target.name;               /// Название группы
                var button_value = target.value;            /// Значение кнопки

                var type_of_subscription_case = $(street_case).parent().next("div[class='content']").find("div[class~='type_of_subscription']");
                var type_of_occupation_case = $(street_case).parent().next("div[class='content']").find("div[class~='type_of_occupation']");
                var swimming_pool_case = $(street_case).parent().next("div[class='content']").find("div[class~='swimming_pool']");

                if (street_name === 'myachkovsky_boulevard' || street_name === 'lubertci') {

                    if (group_name === 'quantity') {

                        if (typeof data[street_name][button_value] === 'object') {
                            show(type_of_subscription_case);
                        } else if (typeof data[street_name][button_value] !== 'object') {
                            $(type_of_subscription_case).hide();
                        }
                    }

                } else if (street_name === 'kirovograd' || street_name === 'vinokurova') {

                    if (group_name === 'quantity') {

                        switch (button_value) {
                            case 'trial':
                                $(type_of_subscription_case).hide();
                                $(type_of_occupation_case).hide();
                                $(swimming_pool_case).hide();
                                previous_quantity_value = button_value;
                                break;
                            case 'oneoff':
                                $(type_of_subscription_case).hide();
                                $(type_of_occupation_case).hide();
                                $(swimming_pool_case).hide();
                                show(swimming_pool_case);
                                $(street_case).parent().next("div[class='content']").find("div[class~='section']").next("div").removeClass('list-hidden');
                                previous_quantity_value = button_value;
                                break;
                            case '4':
                            case '8':
                            case '12':

                                var subscription_count = $(type_of_subscription_case).find("div[class='item-radio']:not([style*='display: none'])").length;
                                $(type_of_subscription_case).find("span").each(function (index, element) {
                                    if (subscription_count === 2) {
                                        $(element).addClass('width-two');
                                    } else {
                                        $(element).removeClass('width-two');
                                    }
                                });


                                if ($(type_of_occupation_case).find("input:radio:checked")[0].value === 'individual') {
                                    if (previous_quantity_value === 'oneoff') {
                                        $(swimming_pool_case).hide();
                                    }
                                    show(swimming_pool_case);
                                } else if ($(type_of_occupation_case).find("input:radio:checked")[0].value === 'group') {
                                    $(swimming_pool_case).hide();
                                }

                                show(type_of_subscription_case);
                                show(type_of_occupation_case);
                                $(street_case).parent().next("div[class='content']").find("div[class~='section']").next("div").addClass('list-hidden');
                                previous_quantity_value = button_value;
                                break;
                        }



                    } else if (group_name === 'type_of_occupation') {

                        var type_of_subscription_strict = $(type_of_subscription_case).find("div[class='item-radio']:first");

                        switch (button_value) {
                            case 'individual':
                                swimming_pool_case.insertAfter(type_of_occupation_case);
                                $(type_of_subscription_case).hide();
                                $(type_of_subscription_strict).hide();
                                show(swimming_pool_case);
                                show(type_of_subscription_case);
                                $(type_of_subscription_strict).hide();
                                $(type_of_subscription_case).find("span").each(function (index, element) {
                                    $(element).addClass('width-two');
                                });
                                $(type_of_subscription_case).find("input[value='standard']").prop("checked", true);
                                break;
                            case 'group':
                                swimming_pool_case.insertAfter(type_of_subscription_case);
                                $(swimming_pool_case).hide();
                                $(type_of_subscription_case).hide();
                                $(type_of_subscription_strict).show();
                                show(type_of_subscription_case);
                                $(type_of_subscription_case).find("span").each(function (index, element) {
                                    $(element).removeClass('width-two');
                                });

                                break;
                        }

                    }
                }


            }


            $(all_inputs).each(function (inputsI, input) {
                $(input).click(function (eventObject) {
                    hide_show_items(eventObject.target);
                })
            })

        });
    },

    'calculate_price_checked': function () {
        jQuery(document).ready(function ($) {

            var streets_cases = $("section[id='price'] form div[class='top'] div[class='title']");

            $(streets_cases).each(function (indexSC, street_case) {

                var quantity_case = $(street_case).parent().next("div[class='content']:first").find("div[class~='quantity']");
                var type_of_occupation_case = $(street_case).parent().next("div[class='content']:first").find("div[class~='type_of_occupation']");
                var type_of_subscription_case = $(street_case).parent().next("div[class='content']:first").find("div[class~='type_of_subscription']");
                var swimming_pool_case = $(street_case).parent().next("div[class='content']:first").find("div[class~='swimming_pool']");

                var price_case = $(quantity_case).parents("div[class='content']").find("div[class~='price-row']");

                var new_price_case = $(price_case).find("div[class='new-price'] span");

                var street_name = street_case.id;                   /// Название улицы

                function checked(inputs_case) {
                    var inputs = $(inputs_case).find("input");
                    var checked = false;
                    $(inputs).each(function (index, input) {
                        if (input.checked) {
                            checked = input.value;
                            return false;
                        }
                    });
                    return checked;
                }

                var quantity_checked_name = checked(quantity_case);
                var type_of_occupation_checked_name = checked(type_of_occupation_case);
                var type_of_subscription_checked_name = checked(type_of_subscription_case);
                var swimming_pool_checked_name = checked(swimming_pool_case);

                switch (street_name) {
                    case 'kirovograd':
                    case 'vinokurova':

                        switch (quantity_checked_name) {
                            case 'trial':
                                var price = data[street_name][quantity_checked_name];
                                $(new_price_case).text(price);
                                $(price_case).append("<div class=\"old-price\">1500 ₽</div>");
                                break;
                            case 'oneoff':
                                var price = data[street_name][quantity_checked_name][swimming_pool_checked_name];
                                $(new_price_case).text(price);
                                break;
                            case '4':
                            case '8':
                            case '12':
                                switch (type_of_occupation_checked_name) {
                                    case 'individual':
                                        var price = data[street_name][quantity_checked_name][type_of_occupation_checked_name][type_of_subscription_checked_name][swimming_pool_checked_name];
                                        $(new_price_case).text(price);
                                        break;
                                    case 'group':
                                        var price = data[street_name][quantity_checked_name][type_of_occupation_checked_name][type_of_subscription_checked_name];
                                        $(new_price_case).text(price);
                                        break;
                                }
                                break;
                        }

                        break;

                    case 'lubertci':

                        var bt_1 = $(street_case).parent().next("div[class='content']:first").find("a[class*='bt-1']");
                        var bt_2 = $(street_case).parent().next("div[class='content']:first").find("a[class='bt-2']");

                        switch(quantity_checked_name) {
                            case 'trial':
                                if (Variables.lubertci_bt_2 === null) {
                                    Variables.lubertci_bt_2 = bt_2;
                                }
                                $(bt_2).remove();
                                $(bt_1).css("width", "100%");
                                $(bt_1).removeClass("bt-1");
                                $(bt_1).addClass("lubertci-bt-1");
                                break;
                            case 'oneoff':
                                if (Variables.lubertci_bt_2 === null) {
                                    Variables.lubertci_bt_2 = bt_2;
                                }
                                $(bt_2).remove();
                                $(bt_1).css("width", "100%");
                                $(bt_1).removeClass("bt-1");
                                $(bt_1).addClass("lubertci-bt-1");
                                break;
                            case '4':
                            case '8':
                            case '12':
                                if (Variables.lubertci_bt_2 === null) {
                                    Variables.lubertci_bt_2 = bt_2;
                                }
                                break;
                        }

                    case 'myachkovsky_boulevard':

                        switch(quantity_checked_name) {
                            case 'trial':
                                var price = data[street_name][quantity_checked_name];
                                $(new_price_case).text(price);
                                $(price_case).append("<div class=\"old-price\">1500 ₽</div>");
                                break;
                            case 'oneoff':
                                var price = data[street_name][quantity_checked_name];
                                $(new_price_case).text(price);
                                break;
                            case '4':
                            case '8':
                            case '12':
                                var price = data[street_name][quantity_checked_name][type_of_subscription_checked_name];
                                $(new_price_case).text(price);
                                break;
                        }

                        break;
                }


            });
        });
    },

    'calculate_price_click': function () {
        jQuery(document).ready(function ($) {

            var streets_cases = $("section[id='price'] form div[class~='top'] div[class='title']").parent().next("div[class='content']");

            function calculate_price_click(target = false, street_case) {

                var quantity_case = $(street_case).find("div[class~='quantity']");
                var type_of_occupation_case = $(street_case).find("div[class~='type_of_occupation']");
                var type_of_subscription_case = $(street_case).find("div[class~='type_of_subscription']");
                var swimming_pool_case = $(street_case).find("div[class~='swimming_pool']");

                var price_case = $(quantity_case).parents("div[class='content']:first").find("div[class~='price-row']:first");
                var new_price_case = $(price_case).find("div[class='new-price'] span");
                var old_price = $(street_case).find("div[class='old-price']");

                var street_name = $(street_case).prev("div[class~='top']").children("div[class='title']")[0].id;                   /// Название улицы

                var target_name = target.name;
                var target_value = target.value;

                    switch (street_name) {
                        case 'kirovograd':
                        case 'vinokurova':
                            switch (target_name) {
                                case 'quantity':
                                    switch (target_value) {
                                        case 'trial':
                                            var price = data[street_name][target_value];
                                            $(new_price_case).text(price);
                                            if (old_price.length === 0) {
                                                $(price_case).append("<div class=\"old-price\">1500 ₽</div>");
                                            }
                                            break;
                                        case 'oneoff':
                                            var swimming_pool_checked = $(swimming_pool_case).find("input:radio:checked")[0].value;
                                            var price = data[street_name][target_value][swimming_pool_checked];
                                            $(new_price_case).text(price);
                                            $(old_price).remove();
                                            break;
                                        case '4':
                                        case '8':
                                        case '12':
                                            var type_of_occupation_checked = $(type_of_occupation_case).find("input:radio:checked")[0].value;
                                            var type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                            var swimming_pool_checked = $(swimming_pool_case).find("input:radio:checked")[0].value;


                                            switch (type_of_occupation_checked) {
                                                case 'individual':
                                                    $(type_of_subscription_case).find("input:radio[value='strict']").parent("div[class='item-radio']").hide();
                                                    $(type_of_subscription_case).find("input:radio[value='standard']").prop("checked", true);
                                                    type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                                    var price = data[street_name][target_value][type_of_occupation_checked][type_of_subscription_checked][swimming_pool_checked];
                                                    break;
                                                case 'group':
                                                    $(type_of_subscription_case).find("input:radio[value='strict']").parent("div[class='item-radio']").show().prop("checked", true);
                                                    type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                                    var price = data[street_name][target_value][type_of_occupation_checked][type_of_subscription_checked];
                                                    break;
                                            }

                                            $(new_price_case).text(price);
                                            $(old_price).remove();
                                            break;
                                    }
                                    break;
                                case 'type_of_occupation':
                                    switch (target_value) {
                                        case 'individual':
                                            var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                            var type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                            var swimming_pool_checked = $(swimming_pool_case).find("input:radio:checked")[0].value;
                                            var price = data[street_name][quantity_checked][target_value][type_of_subscription_checked][swimming_pool_checked];

                                            $(new_price_case).text(price);
                                            break;
                                        case 'group':
                                            var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                            var type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                            var price = data[street_name][quantity_checked][target_value][type_of_subscription_checked];

                                            $(new_price_case).text(price);
                                            break;
                                    }
                                    break;
                                case 'type_of_subscription':
                                    switch (target_value) {
                                        case 'strict':
                                            var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                            var type_of_occupation_checked = $(type_of_occupation_case).find("input:radio:checked")[0].value;
                                            var price = data[street_name][quantity_checked][type_of_occupation_checked][target_value];
                                            $(new_price_case).text(price);
                                            break;
                                        case 'standard':
                                        case 'loyal':
                                            var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                            var type_of_occupation_checked = $(type_of_occupation_case).find("input:radio:checked")[0].value;
                                            if (type_of_occupation_checked === 'group') {
                                                var price = data[street_name][quantity_checked][type_of_occupation_checked][target_value];
                                            } else if (type_of_occupation_checked === 'individual') {
                                                var swimming_pool_checked = $(swimming_pool_case).find("input:radio:checked")[0].value;
                                                var price = data[street_name][quantity_checked][type_of_occupation_checked][target_value][swimming_pool_checked];
                                            }

                                            $(new_price_case).text(price);
                                            break;
                                    }
                                    break;
                                case 'swimming_pool':
                                    var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                    var type_of_occupation_checked = $(type_of_occupation_case).find("input:radio:checked")[0].value;
                                    var type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;

                                    switch (target_value){
                                        case 'small_pool':
                                        case 'large_pool':
                                            if (quantity_checked === 'oneoff') {
                                                var price = data[street_name][quantity_checked][target_value];
                                            } else {
                                                var price = data[street_name][quantity_checked][type_of_occupation_checked][type_of_subscription_checked][target_value];
                                            }

                                            $(new_price_case).text(price);
                                            break;
                                    }
                                    break;
                            }
                            break;

                        case 'lubertci':

                            var buttons_row = $(street_case).find("div[class~='buttons-row']");
                            var bt_1 = $(street_case).find("a[class*='bt-1']");
                            var bt_2 = $(street_case).find("a[class~='bt-2']");

                            if (target_name === "quantity") {
                                switch (target_value) {
                                    case 'trial':
                                        if (Variables.lubertci_bt_2 === null) {
                                            Variables.lubertci_bt_2 = bt_2;
                                        }
                                        $(bt_2).remove();
                                        $(bt_1).css("width", "100%");
                                        $(bt_1).removeClass("bt-1");
                                        $(bt_1).addClass("lubertci-bt-1");
                                        break;
                                    case 'oneoff':
                                        if (Variables.lubertci_bt_2 === null) {
                                            Variables.lubertci_bt_2 = bt_2;
                                        }
                                        $(bt_2).remove();
                                        $(bt_1).css("width", "100%");
                                        $(bt_1).removeClass("bt-1");
                                        $(bt_1).addClass("lubertci-bt-1");
                                        break;
                                    case '4':
                                    case '8':
                                    case '12':
                                        $(bt_1).css("width", "50%");
                                        $(bt_1).removeClass("lubertci-bt-1");
                                        $(bt_1).addClass("bt-1");
                                        var to_pay_link = Variables.lubertci_bt_2.appendTo(buttons_row);
                                        Payment.fill_link(to_pay_link, street_case);
                                        break;
                                }
                            }

                        case 'myachkovsky_boulevard':
                            switch (target_name) {
                                case 'quantity':
                                    switch (target_value) {
                                        case 'trial':
                                            var price = data[street_name][target_value];
                                            $(new_price_case).text(price);
                                            if (old_price.length === 0) {
                                                $(price_case).append("<div class=\"old-price\">1500 ₽</div>");
                                            }
                                            break;
                                        case 'oneoff':
                                            var price = data[street_name][target_value];
                                            $(new_price_case).text(price);
                                            $(old_price).remove();
                                            break;
                                        case '4':
                                        case '8':
                                        case '12':
                                            var type_of_subscription_checked = $(type_of_subscription_case).find("input:radio:checked")[0].value;
                                            var price = data[street_name][target_value][type_of_subscription_checked];
                                            $(new_price_case).text(price);
                                            $(old_price).remove();
                                            break;
                                    }
                                    break;
                                case 'type_of_subscription':
                                    switch (target_value) {
                                        case 'standard':
                                        case 'loyal':
                                            var quantity_checked = $(quantity_case).find("input:radio:checked")[0].value;
                                            price = data[street_name][quantity_checked][target_value];
                                            $(new_price_case).text(price);
                                            break;
                                    }
                                    break;
                            }
                            break;
                    }

            }



            $(streets_cases).each(function (i, street_case) {

                var inputs = $(street_case).find("input");

                $(inputs).each(function (index, input) {
                    $(input).click(function (eventObject) {
                        calculate_price_click(eventObject.target, street_case);
                    })
                })
            })

        });
    },

    'fill_link':  function (target = false, street_case) {
        jQuery(document).ready(function ($) {

            var streets_cases = $("section[id='price'] form div[class~='top'] div[class='title']").parent().next("div[class='content']");

            function fill_link(target, street_case) {

                var street_name = $(street_case).prev("div[class~='top']").children("div[class='title']")[0].id;                   /// Название улицы
                var quantity_case = $(street_case).find("div[class~='quantity']:visible");
                var quantity_active_value = $(quantity_case).find("input:radio:checked").attr("value");
                var swimming_pool_case = $(street_case).find("div[class~='swimming_pool']:visible");
                var swimming_pool_active_value = $(swimming_pool_case).find("input:radio:checked").attr("value");

                if (quantity_active_value === 'trial' || quantity_active_value === 'oneoff') {

                    /*var company = '';
                    var service = '';

                    if (quantity_active_value === 'trial') {
                        service = '1876676';
                    }


                    switch (street_name) {
                        case 'kirovograd':
                            company = '77353';
                            if (quantity_active_value === 'oneoff') {
                                switch(swimming_pool_active_value) {
                                    case 'small_pool':
                                        service = '2307818';
                                        break;

                                    case 'large_pool':
                                        service = '2307826';
                                        break;
                                }
                            }
                            break;
                        case 'vinokurova':
                            company = '133947';
                            if (quantity_active_value === 'oneoff') {
                                switch(swimming_pool_active_value) {
                                    case 'small_pool':
                                        service = '3547422';
                                        break;

                                    case 'large_pool':
                                        service = '4706618';
                                        break;
                                }
                            }
                            break;
                        case 'myachkovsky_boulevard':
                            company = '225975';
                            if (quantity_active_value === 'oneoff') {
                                service = '3547422';
                            }
                            break;
                        case 'lubertci':
                            company = '#';
                            if (quantity_active_value === 'oneoff') {
                                service = '#';
                            }
                            break;
                    }

                    var sign_up_link_href = 'https://n76658.yclients.com/company:' + company + '/idx:0/master?o=s' + service;
                    */

                    let filialCode;

                    switch (street_name) {
                        case 'kirovograd':
                            filialCode = '60559';
                            break;
                        case 'vinokurova':
                            filialCode = '124032';
                            break;
                        case 'myachkovsky_boulevard':
                            filialCode = '228760';
                            break;
                        case 'lubertci':
                            //
                            break;
                    }
                    target.href = 'https://n' + filialCode + '.yclients.com/';

                } else {
                    var type_of_occupation_case = $(street_case).find("div[class~='type_of_occupation']:visible");
                    var type_of_subscription_case = $(street_case).find("div[class~='type_of_subscription']:visible");

                    var service_name = '';
                    var add;

                    if(quantity_case.length > 0) {
                        add = $(quantity_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + 'Количестово занятий: ' + add;
                    }
                    if(type_of_occupation_case.length > 0){
                        add = $(type_of_occupation_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Вид занятий: ' + add;
                    }
                    if(type_of_subscription_case.length > 0){
                        add = $(type_of_subscription_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Вид абонемента: ' + add;
                    }
                    if(swimming_pool_case.length > 0){
                        add = $(swimming_pool_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Бассейн: ' + add;
                    }

                    var street_name = $(street_case).prev("div[class~='top']").children("div[class='title']")[0].id;                   /// Название улицы
                    var pay_link = target;
                    var cost = $(street_case).find("div[class='new-price'] span").text();
                    var key = false;

                    switch (street_name) {
                        case 'kirovograd':
                            key = 'G%2FncjmNEBe84x4lEfgf3dyIqwGWQVDf7HKlnEBr0Dgc%3D';
                            break;
                        case 'vinokurova':
                            key = 'Wy4g8yADEp%2FmSFHDKbbHqGOrWnEzE8kDIrSrapVc0Z8%3D';
                            break;
                        case 'myachkovsky_boulevard':
                            key = 'TOJugDeSdrrhNrSj8vsHLughHsNGQFliUmq8X4yCPkE%3D';
                            break;
                        case 'lubertci':
                            key = 'LX21USWpnEKqvvVyPmda5tammqzcCmeoOV6NnCYfQ8k=';
                            break;
                    }

                    var pay_link_href = 'https://partner.rficb.ru/alba/input/?name=' + service_name +'&cost=' + cost + '&key=' + key + '&default_email=&order_id=0';

                    pay_link.href = pay_link_href;
                }
            }

            $(streets_cases).each(function (i, street_case) {

                var to_pay_link = $(street_case).find("div[class='buttons-row']").find("a[class='bt-2']");

                $(to_pay_link).click(function (eventObject) {
                        fill_link(eventObject.target, street_case);
                    console.log(street_case);
                })
            })



        });
    },

    'sign_up':  function () {
        jQuery(document).ready(function ($) {

            var streets_cases = $("section[id='price'] form div[class~='top'] div[class='title']").parent().next("div[class='content']");

            function sign_up(target = false, street_case) {

                var street_name = $(street_case).prev("div[class~='top']").children("div[class='title']")[0].id;                   /// Название улицы

                var quantity_case = $(street_case).find("div[class~='quantity']:visible");
                var quantity_active_value = $(quantity_case).find("input:radio:checked").attr("value");
                var swimming_pool_case = $(street_case).find("div[class~='swimming_pool']:visible");
                var swimming_pool_active_value = $(swimming_pool_case).find("input:radio:checked").attr("value");

                if ((quantity_active_value === 'trial' || quantity_active_value === 'oneoff') && street_name !== 'lubertci') {

                        /*var company = '';
                        var service = '';

                        if (quantity_active_value === 'trial') {
                            service = '1876676';
                        }


                        switch (street_name) {
                            case 'kirovograd':
                                company = '77353';
                                if (quantity_active_value === 'oneoff') {
                                    switch(swimming_pool_active_value) {
                                        case 'small_pool':
                                            service = '2307818';
                                            break;

                                        case 'large_pool':
                                            service = '2307826';
                                            break;
                                    }
                                }
                                break;
                            case 'vinokurova':
                                company = '133947';
                                if (quantity_active_value === 'oneoff') {
                                    switch(swimming_pool_active_value) {
                                        case 'small_pool':
                                            service = '3547422';
                                            break;

                                        case 'large_pool':
                                            service = '4706618';
                                            break;
                                    }
                                }
                                break;
                            case 'myachkovsky_boulevard':
                                company = '225975';
                                if (quantity_active_value === 'oneoff') {
                                    service = '3547422';
                                }
                                break;
                        }

                        var sign_up_link_href = 'https://n76658.yclients.com/company:' + company + '/idx:0/master?o=s' + service;*/


                    let filialCode;

                    switch (street_name) {
                        case 'kirovograd':
                            filialCode = '60559';
                            break;
                        case 'vinokurova':
                            filialCode = '124032';
                            break;
                        case 'myachkovsky_boulevard':
                            filialCode = '228760';
                            break;
                        case 'lubertci':
                            //
                            break;
                    }
                    target.href = 'https://n' + filialCode + '.yclients.com/';

                        return true;

                } else {

                    var value;

                    switch (street_name) {
                        case 'kirovograd':
                            value = 1;
                            break;
                        case 'vinokurova':
                            value = 2;
                            break;
                        case 'myachkovsky_boulevard':
                            value = 3;
                            break;
                        case 'lubertci':
                            value = 4;
                            break;
                    }

                    var active = $('.popup').find("option[value=" + value + "]");
                    $(active).prop("selected", true);


                    var type_of_occupation_case = $(street_case).find("div[class~='type_of_occupation']:visible");
                    var type_of_subscription_case = $(street_case).find("div[class~='type_of_subscription']:visible");

                    var service_name = '';
                    var add;

                    if(quantity_case.length > 0) {
                        add = $(quantity_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + 'Количестово занятий: ' + add;
                    }
                    if(type_of_occupation_case.length > 0){
                        add = $(type_of_occupation_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Вид занятий: ' + add;
                    }
                    if(type_of_subscription_case.length > 0){
                        add = $(type_of_subscription_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Вид абонемента: ' + add;
                    }
                    if(swimming_pool_case.length > 0){
                        add = $(swimming_pool_case).find("input:radio:checked").next("span:first").text().toLowerCase();
                        service_name = service_name + ', Бассейн: ' + add;
                    }

                    //console.log($(this).attr('data-type'));
                    $('.hidden-form').attr('value', service_name);

                    // поиск popup и popup-overlay для их открытия
                    // $('.popup').css('display', 'block');
                    // $('.popup-overlay').css('display', 'block');
                    // or
                    $('.popup').slideDown();
                    $('.popup-overlay').css('display', 'block');

                    // поиск button close popup
                    $('#js-close-popup, .popup-overlay').on('click', function(e) {
                        // $('.popup').css('display', 'none');
                        // $('.popup-overlay').css('display', 'none');
                        // or
                        $('.popup').find("option[value='1']").prop("selected", true);
                        $('.hidden-form').attr('value', 'Аноним');
                        $('.popup').slideUp();
                        $('.popup-overlay').css('display', 'none');
                    });

                    ////////////////////////

                    return false;

                }

            }

            $(streets_cases).each(function (i, street_case) {

                var sign_up_link = $(street_case).find("div[class='buttons-row']").find("a[class*='bt-1']");

                $(sign_up_link).click(function (eventObject) {
                    var result = sign_up(eventObject.target, street_case);
                    if (result == false) {
                        return false;
                    }
                })
            })

        });
    },

    'load':  function () {
        jQuery(document).ready(function ($) {

        $("section[id='price'] form div[class~='top']:first").click();

        });
    }
};
