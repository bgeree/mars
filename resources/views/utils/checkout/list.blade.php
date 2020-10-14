{{-- Input: $transaction, $paymentType  --}}
@foreach($transaction[$paymentType] ?? [] as $transaction)
<tr>
    <td>{{ $transaction->comment }}</td>
    <td>{{ $transaction->created_at->format('Y. m. d.') }}</td>
    <td class="right"><nobr>{{ number_format($transaction->amount, 0, '.', ' ') }} Ft</nobr></td>
</tr>
@endforeach