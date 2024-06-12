<footer class="main-footer">
    @php
    $currentYear = date('Y');
    @endphp
    <div class="text">
        ระบบสืบค้นรายงานการประชุม บันทึกการประชุมและการออกเสียงลงคะแนน &copy; {{ $currentYear }}-{{ $currentYear + 1 }}. All rights reserved.
    </div>
    <div class="float-right d-none d-sm-inline">
        สำนักงานเลขาธิการวุฒิสภา เลขที่ 1111 ถนนสามเสน แขวงถนนนครไชยศรี เขตดุสิต กรุงเทพฯ 10300
    </div>
</footer>