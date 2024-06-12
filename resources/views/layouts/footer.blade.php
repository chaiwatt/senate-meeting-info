<footer class="main-footer">
    @php
    $currentYear = date('Y');
    @endphp
    <div class="text">
        ระบบฐานข้อมูลการตรวจจับและห้ามใช้ยานพาหนะที่มีมลพิษเกินมาตรฐาน &copy; {{ $currentYear }}-{{ $currentYear + 1 }}. All rights reserved.
    </div>
    <div class="float-right d-none d-sm-inline">
        กรมควบคุมมลพิษ  92 ซอยพหลโยธิน 7 ถนนพหลโยธิน แขวงพญาไท เขตพญาไท กรุงเทพมหานคร 10400
    </div>
</footer>