<?php
class ControllerTestTest extends Controller {//这里有两个test,第一个test是目录的意思,第二个test文件
    public function index(){
        $this->load->language('test/test');//载入语言包
        $data['test_text'] = $this->language->get('text');//载入语言内容
        $data['column_left'] = $this->load->controller('common/column_left');//载入左侧栏
        $data['column_right'] = $this->load->controller('common/column_right');//载入右侧栏
        $data['footer'] = $this->load->controller('common/footer');//载入底部
        $data['header'] = $this->load->controller('common/header');//载入头部
        //下面这5行代码执行了文件替代机制,对于模块开发很有用,上面所有整理好的数据都存在一个数组data里面,然后一起传给前端tpl文件里,通过WEB服务器把解析后的内容输出给浏览器
        // if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/test/test.tpl')) {//判断当前模板有没有这个文件
        //     $this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/test/test.tpl', $data));//如果有这个文件执行当前模板下的这个文件        } else {//如果当前模板下没有这个文件,执行默认模板下的文件
        //     $this->response->setOutput($this->load->view('default/template/test/test.tpl', $data));//默认模板下的这个文件
        // }       

        // if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/test/test.tpl')) {
        //     $this->template = $this->config->get('config_template') . '/template/test/test.tpl';
        // } else {
        //     $this->template = 'default/template/test/test.tpl';
        // }

        $this->response->setOutput($this->load->view('test/test', $data));
    }       
}