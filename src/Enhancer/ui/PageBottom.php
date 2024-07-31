<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace AbraFlexi\Enhancer\ui;

/**
 * Description of PageBottom
 *
 * @author Vitex <info@vitexsoftware.cz> 
 */
class PageBottom extends \Ease\Html\FooterTag {

    public function __construct($content = null, $properties = []) {
        parent::__construct($content, $properties);

        $this->addItem(new \Ease\TWB5\Container(\Ease\TWB5\WebPage::singleton()->getStatusMessagesBlock()),['style'=>'padding: 10px; margin: 10px;']);
        
        $this->addItem(new \Ease\Html\HrTag());

        $footrow = new \Ease\TWB5\Row();

        $author = '<strong>' . _('Invoice Enhancer') . '</strong> ' . \Ease\Shared::appVersion() . '<br>' . '&nbsp;&nbsp; &copy; 2024 <a href="https://vitexsoftware.com/">VitexSoftware</a>';
        $footrow->addColumn(6, [$author]);
        $mastodon = new \Ease\Html\ATag('https://f.cz/@vitexsoftware', new \Ease\Html\ImgTag('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MS4wNzY5NTRtbSIgaGVpZ2h0PSI2NS40NzgzMW1tIiB2aWV3Qm94PSIwIDAgMjE2LjQxNDQgMjMyLjAwOTc2Ij4KICA8cGF0aCBmaWxsPSIjMmI5MGQ5IiBkPSJNMjExLjgwNzM0IDEzOS4wODc1Yy0zLjE4MTI1IDE2LjM2NjI1LTI4LjQ5MjUgMzQuMjc3NS01Ny41NjI1IDM3Ljc0ODc1LTE1LjE1ODc1IDEuODA4NzUtMzAuMDgzNzUgMy40NzEyNS00NS45OTg3NSAyLjc0MTI1LTI2LjAyNzUtMS4xOTI1LTQ2LjU2NS02LjIxMjUtNDYuNTY1LTYuMjEyNSAwIDIuNTMzNzUuMTU2MjUgNC45NDYyNS40Njg3NSA3LjIwMjUgMy4zODM3NSAyNS42ODYyNSAyNS40NyAyNy4yMjUgNDYuMzkxMjUgMjcuOTQyNSAyMS4xMTYyNS43MjI1IDM5LjkxODc1LTUuMjA2MjUgMzkuOTE4NzUtNS4yMDYyNWwuODY3NSAxOS4wOXMtMTQuNzcgNy45MzEyNS00MS4wODEyNSA5LjM5Yy0xNC41MDg3NS43OTc1LTMyLjUyMzc1LS4zNjUtNTMuNTA2MjUtNS45MTg3NUM5LjIzMjM0IDIxMy44MiAxLjQwNjA5IDE2NS4zMTEyNS4yMDg1OSAxMTYuMDkxMjVjLS4zNjUtMTQuNjEzNzUtLjE0LTI4LjM5Mzc1LS4xNC0zOS45MTg3NSAwLTUwLjMzIDMyLjk3NjI1LTY1LjA4MjUgMzIuOTc2MjUtNjUuMDgyNUM0OS42NzIzNCAzLjQ1Mzc1IDc4LjIwMzU5LjI0MjUgMTA3Ljg2NDg0IDBoLjcyODc1YzI5LjY2MTI1LjI0MjUgNTguMjExMjUgMy40NTM3NSA3NC44Mzc1IDExLjA5IDAgMCAzMi45NzUgMTQuNzUyNSAzMi45NzUgNjUuMDgyNSAwIDAgLjQxMzc1IDM3LjEzMzc1LTQuNTk4NzUgNjIuOTE1Ii8+CiAgPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE3Ny41MDk4NCA4MC4wNzd2NjAuOTQxMjVoLTI0LjE0Mzc1di01OS4xNWMwLTEyLjQ2ODc1LTUuMjQ2MjUtMTguNzk3NS0xNS43NC0xOC43OTc1LTExLjYwMjUgMC0xNy40MTc1IDcuNTA3NS0xNy40MTc1IDIyLjM1MjV2MzIuMzc2MjVIOTYuMjA3MzRWODUuNDIzMjVjMC0xNC44NDUtNS44MTYyNS0yMi4zNTI1LTE3LjQxODc1LTIyLjM1MjUtMTAuNDkzNzUgMC0xNS43NCA2LjMyODc1LTE1Ljc0IDE4Ljc5NzV2NTkuMTVIMzguOTA0ODRWODAuMDc3YzAtMTIuNDU1IDMuMTcxMjUtMjIuMzUyNSA5LjU0MTI1LTI5LjY3NSA2LjU2ODc1LTcuMzIyNSAxNS4xNzEyNS0xMS4wNzYyNSAyNS44NS0xMS4wNzYyNSAxMi4zNTUgMCAyMS43MTEyNSA0Ljc0ODc1IDI3Ljg5NzUgMTQuMjQ3NWw2LjAxMzc1IDEwLjA4MTI1IDYuMDE1LTEwLjA4MTI1YzYuMTg1LTkuNDk4NzUgMTUuNTQxMjUtMTQuMjQ3NSAyNy44OTc1LTE0LjI0NzUgMTAuNjc3NSAwIDE5LjI4IDMuNzUzNzUgMjUuODUgMTEuMDc2MjUgNi4zNjg3NSA3LjMyMjUgOS41NCAxNy4yMiA5LjU0IDI5LjY3NSIvPgo8L3N2Zz4K', 'Mastodon'));
        $github = new \Ease\Html\ATag('https://github.com/VitexSoftware/AbraFlexi-InvoiceEnhancer', new \Ease\Html\ImgTag('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAyNCIgaGVpZ2h0PSIxMDI0IiB2aWV3Qm94PSIwIDAgMTAyNCAxMDI0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTggMEMzLjU4IDAgMCAzLjU4IDAgOEMwIDExLjU0IDIuMjkgMTQuNTMgNS40NyAxNS41OUM1Ljg3IDE1LjY2IDYuMDIgMTUuNDIgNi4wMiAxNS4yMUM2LjAyIDE1LjAyIDYuMDEgMTQuMzkgNi4wMSAxMy43MkM0IDE0LjA5IDMuNDggMTMuMjMgMy4zMiAxMi43OEMzLjIzIDEyLjU1IDIuODQgMTEuODQgMi41IDExLjY1QzIuMjIgMTEuNSAxLjgyIDExLjEzIDIuNDkgMTEuMTJDMy4xMiAxMS4xMSAzLjU3IDExLjcgMy43MiAxMS45NEM0LjQ0IDEzLjE1IDUuNTkgMTIuODEgNi4wNSAxMi42QzYuMTIgMTIuMDggNi4zMyAxMS43MyA2LjU2IDExLjUzQzQuNzggMTEuMzMgMi45MiAxMC42NCAyLjkyIDcuNThDMi45MiA2LjcxIDMuMjMgNS45OSAzLjc0IDUuNDNDMy42NiA1LjIzIDMuMzggNC40MSAzLjgyIDMuMzFDMy44MiAzLjMxIDQuNDkgMy4xIDYuMDIgNC4xM0M2LjY2IDMuOTUgNy4zNCAzLjg2IDguMDIgMy44NkM4LjcgMy44NiA5LjM4IDMuOTUgMTAuMDIgNC4xM0MxMS41NSAzLjA5IDEyLjIyIDMuMzEgMTIuMjIgMy4zMUMxMi42NiA0LjQxIDEyLjM4IDUuMjMgMTIuMyA1LjQzQzEyLjgxIDUuOTkgMTMuMTIgNi43IDEzLjEyIDcuNThDMTMuMTIgMTAuNjUgMTEuMjUgMTEuMzMgOS40NyAxMS41M0M5Ljc2IDExLjc4IDEwLjAxIDEyLjI2IDEwLjAxIDEzLjAxQzEwLjAxIDE0LjA4IDEwIDE0Ljk0IDEwIDE1LjIxQzEwIDE1LjQyIDEwLjE1IDE1LjY3IDEwLjU1IDE1LjU5QzEzLjcxIDE0LjUzIDE2IDExLjUzIDE2IDhDMTYgMy41OCAxMi40MiAwIDggMFoiIHRyYW5zZm9ybT0ic2NhbGUoNjQpIiBmaWxsPSIjMUIxRjIzIi8+Cjwvc3ZnPgo=', 'GitHub', ['width' => 25, 'title' => _('Source Code')]));
        $linkedIn = new \Ease\Html\ATag('https://www.linkedin.com/in/vitexsoftware/', new \Ease\Html\ImgTag('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBoZWlnaHQ9IjcyIiB2aWV3Qm94PSIwIDAgNzIgNzIiIHdpZHRoPSI3MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik04LDcyIEw2NCw3MiBDNjguNDE4Mjc4LDcyIDcyLDY4LjQxODI3OCA3Miw2NCBMNzIsOCBDNzIsMy41ODE3MjIgNjguNDE4Mjc4LC04LjExNjI0NTAxZS0xNiA2NCwwIEw4LDAgQzMuNTgxNzIyLDguMTE2MjQ1MDFlLTE2IC01LjQxMDgzMDAxZS0xNiwzLjU4MTcyMiAwLDggTDAsNjQgQzUuNDEwODMwMDFlLTE2LDY4LjQxODI3OCAzLjU4MTcyMiw3MiA4LDcyIFoiIGZpbGw9IiMwMDdFQkIiLz48cGF0aCBkPSJNNjIsNjIgTDUxLjMxNTYyNSw2MiBMNTEuMzE1NjI1LDQzLjgwMjExNDkgQzUxLjMxNTYyNSwzOC44MTI3NTQyIDQ5LjQxOTc5MTcsMzYuMDI0NTMyMyA0NS40NzA3MDMxLDM2LjAyNDUzMjMgQzQxLjE3NDYwOTQsMzYuMDI0NTMyMyAzOC45MzAwNzgxLDM4LjkyNjExMDMgMzguOTMwMDc4MSw0My44MDIxMTQ5IEwzOC45MzAwNzgxLDYyIEwyOC42MzMzMzMzLDYyIEwyOC42MzMzMzMzLDI3LjMzMzMzMzMgTDM4LjkzMDA3ODEsMjcuMzMzMzMzMyBMMzguOTMwMDc4MSwzMi4wMDI5MjgzIEMzOC45MzAwNzgxLDMyLjAwMjkyODMgNDIuMDI2MDQxNywyNi4yNzQyMTUxIDQ5LjM4MjU1MjEsMjYuMjc0MjE1MSBDNTYuNzM1Njc3MSwyNi4yNzQyMTUxIDYyLDMwLjc2NDQ3MDUgNjIsNDAuMDUxMjEyIEw2Miw2MiBaIE0xNi4zNDkzNDksMjIuNzk0MDEzMyBDMTIuODQyMDU3MywyMi43OTQwMTMzIDEwLDE5LjkyOTY1NjcgMTAsMTYuMzk3MDA2NyBDMTAsMTIuODY0MzU2NiAxMi44NDIwNTczLDEwIDE2LjM0OTM0OSwxMCBDMTkuODU2NjQwNiwxMCAyMi42OTcwMDUyLDEyLjg2NDM1NjYgMjIuNjk3MDA1MiwxNi4zOTcwMDY3IEMyMi42OTcwMDUyLDE5LjkyOTY1NjcgMTkuODU2NjQwNiwyMi43OTQwMTMzIDE2LjM0OTM0OSwyMi43OTQwMTMzIFogTTExLjAzMjU1MjEsNjIgTDIxLjc2OTQwMSw2MiBMMjEuNzY5NDAxLDI3LjMzMzMzMzMgTDExLjAzMjU1MjEsMjcuMzMzMzMzMyBMMTEuMDMyNTUyMSw2MiBaIiBmaWxsPSIjRkZGIi8+PC9nPjwvc3ZnPg==', 'LinkedIN', ['height' => '25px', 'style' => 'margin: 20x', 'title' => _('LinkedIN Producer page')]));

        $footrow->addColumn(6, [$github, '&nbsp;', $linkedIn]);

        $this->addItem(new \Ease\TWB5\Container($footrow));
    }
    
    
}
