<h2>Пользователь оставил свои данные</h2>

Филиал: {{ $data['filial'] }} <br>
{!! (isset($data['pool']) && $data['pool']) ? 'Бассейн: ' . $data['pool'] . '<br>' : '' !!}
{!! (isset($data['subscription']) && $data['subscription']) ? 'Абонемент: ' . $data['subscription'] . '<br>' : '' !!}
{!! (isset($data['price']) && $data['price']) ? 'Цена: ' . $data['price'] . '<br><br>' : '' !!}
{!! $data['name'] ? 'Имя: ' . $data['name'] . '<br>' : '' !!}
Телефон: {{ $data['phone'] }}
