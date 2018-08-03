<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Microsoft JhengHei;
            letter-spacing: 1px;
        }
        .breadcrumb{
            background-color: transparent;
            padding: 5px 0;
        }
        .breadcrumb-item+.breadcrumb-item::before{
            content: '>';
        }
        .teacher_img{
            height: 200px;
        }
        .name{
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 0;
        }
        .other_item{
            font-size: 22px;
            margin-bottom: 0;
        }
        .teacher_info{
            margin-bottom: 15px;
        }
        .plus_icon{
            width: 20px;
            height: 20px;
            position: relative;
            margin-right: 30px;
        }
        .plus_icon::before,
        .plus_icon::after{
            position: absolute;
            content: "";
            width: 20px;
            height: 5px;
            background-color: #185A7D;

        }
        .plus_icon::before{
            left: 0;
            top:11px;
        }
        .plus_icon::after{
            top:11px;
            transform: rotate(90deg);
            transition: .5s;

        }
        .plus_icon.active::after{
            transform: rotate(0deg);
        }

    </style>
</head>
<body>
<div class="container">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">首頁</a></li>
            <li class="breadcrumb-item"><a href="#">師資陣容</a></li>
            <li class="breadcrumb-item active" aria-current="page">陳翰紳 系主任</li>
        </ol>
    </div>
    <div class="teacher_info">
        <div class="row">
            <div class="col-lg-3">
                <img class="teacher_img" src="img/teacher_info.png" alt="">
            </div>
            <div class="col-9">
                <p class="name">陳翰紳 教授兼系主任</p>
                <p class="other_item">學歷：國立成功大學博士</p>
                <p class="other_item">專長：休閒遊憩、創業管理、行銷企劃</p>
                <p class="other_item">電話：04-24730022轉12225</p>
                <p class="other_item">E-mail： allen975@csmu.edu.tw</p>
            </div>
        </div>
    </div>
    <div class="accordion" id="teacher_info">
        <div class="card">
            <div class="card-header" id="education_heading" data-toggle="collapse" data-target="#education" aria-expanded="true" aria-controls="education">
                <h5 class="mb-0">
                    <span class="plus_icon active"></span>
                    學歷
                </h5>
            </div>

            <div id="education" class="collapse show" aria-labelledby="education_heading">
                <div class="card-body">
                    <p>
                        碩士：國立中興大學
                    </p>
                    <p>
                        博士：國立成功大學
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="experience_heading" data-toggle="collapse" data-target="#experience" aria-expanded="false" aria-controls="experience">
                <h5 class="mb-0">
                    <span class="plus_icon"></span>
                    經歷
                </h5>
            </div>
            <div id="experience" class="collapse" aria-labelledby="experience_heading">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">2010/9～迄今
                        </div>
                        <div class="col-10">中山醫學大學 健康餐飲暨產業管理系 專任教授 / 專任副教授
                        </div>
                        <div class="col-2">2011/2～迄今
                        </div>
                        <div class="col-10">朝陽科技大學 企業管理系 兼任教授 / 兼任副教授
                        </div>
                        <div class="col-2">1999/8～2010/9
                        </div>
                        <div class="col-10">中州科技大學 行銷與流通管理系、企業管理系、應用外語系 專任副教授 / 專任講師
                        </div>
                        <div class="col-2">1998/8～2003/7
                        </div>
                        <div class="col-10">大葉大學 企業管理系 / 兼任講師
                        </div>
                        <div class="col-2">1996/8～1998/7
                        </div>
                        <div class="col-10">臺灣觀光學院 不動產經營系/專任講師
                        </div>
                        <div class="col-2">1996/7～2000/6
                        </div>
                        <div class="col-10">博覽家旅行社 特約導遊
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" id="skill_heading" data-toggle="collapse" data-target="#skill" aria-expanded="false" aria-controls="skill">
                <h5 class="mb-0">
                    <span class="plus_icon"></span>
                    學術專長
                </h5>
            </div>
            <div id="skill" class="collapse" aria-labelledby="skill_heading">
                <div class="card-body">
                    <p>
                        休閒遊憩規劃與管理、資源與環境經濟、行銷研究與數量模型
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" id="research_work_heading" data-toggle="collapse" data-target="#research_work" aria-expanded="false" aria-controls="research_work">
                <h5 class="mb-0">
                    <span class="plus_icon"></span>
                    研究著作
                </h5>
            </div>
            <div id="research_work" class="collapse" aria-labelledby="research_work_heading">
                <div class="card-body">
                    <p>
                        期刊論文
                    </p>
                    <ol>
                        <li>
                            Han-Shen Chen, Bi-Kun Tsai, Chi-Ming Hsieh (2017). Determinants of Consumers’ Purchasing Intentions for the Hydrogen-Electric Motorcycle. Sustainability, 9(8), 1447. (SSCI)
                        </li>
                        <li>Han-Shen Chen, Wan-Yu Liu, Chi-Ming Hsieh (2017). Integrating Ecosystem Services and Eco-Security to Assess Sustainable Development in Liuqiu Island. Sustainability, 9(6), 1002. (SSCI)</li>
                        <li>Chi-Ming Hsieh, Bi-Kun Tsai, Han-Shen Chen* (2017). Residents’ Attitude toward Aboriginal Cultural Tourism Development: An Integration of Two Theories. Sustainability. 9(6), 903. (SSCI) (*Corresponding author)</li>
                        <li>Han-Shen Chen (2017). Establishment and Application of Wetlands Ecosystem Services and Sustainable Ecological Evaluation Indicators. Water, 9(3), 197. (SCI)</li>
                        <li>Han-Shen Chen (2017). Evaluation and Analysis of Eco-Security in Environmentally Sensitive Areas Using an Emergy Ecological Footprint. International Journal of Environmental Research and Public Health. 14(2),136. (SCI)</li>
                        <li> Chu-Wei Chen, Han-Shen Chen (2016). Analyzing and measuring the sustainable development for a scenicareabyapplyinganemergy analysis. International Journal of Applied Chemistry. 12(4), 758-793.</li>
                        <li>Shang-Yu Cheng, Wen-Shin Huang, Han-Shen Chen*, Kuan-Lin Yeh (2016). Language Attitude and Consumer Ethnocentrism in Advertising Communication. Australian Journal of Basic and Applied Sciences, 10(3),52-60. (*Corresponding author)</li>
                        <li>Han-Shen Chen (2015). The study of the relationship among environmental cognition, attitude,sensitivityand behavior: The case of an eco-resort island. International Journal of Safety and Security Engineering.5(4),352-358. (EI)</li>
                        <li>Han-Shen Chen (2015). Establishment and Applied Research on a Wetland Ecosystem Evaluation Model in Taiwan. Sustainability. 7(12),15785-15793. (SSCI)</li>
                        <li>Han-Shen Chen and Wen-Shin Huang (2015). Development of an Ecological Footprint for Accommodation Facilities in Taroko National Park, Taiwan. International Journal of Design & Nature and Ecodynamics.10(2),165-173. (EI)</li>
                        <li>Han-Shen Chen (2015). Using Water Footprints for Examining the Sustainable Development of Science Parks. Sustainability. 7(5),5521-5541. (SSCI)</li>
                        <li> Han-Shen Chen (2015). The Establishment and Application of Environment Sustainability Evaluation Indicators for Ecotourism Environments. Sustainability.7(4),4727-4746. (SSCI)</li>
                        <li> Han-Shen Chen, Chia-Yon Chen, Chiung-Tze Chang, Tsuifang Hsieh (2014). The Construction and Application of a Carrying Capacity Evaluation Model in a National Park. Stochastic Environmental Research and Risk Assessment. 28(6),1333-1341. (SCI)</li>
                        <li>Han-Shen Chen (2014). Apply GM (h,N) Model to Analyze the Influence Factor in Hybrid Vehicles, Applied Mathematics & Information Sciences, 8(3),1445-1453. (SCI)</li>
                        <li> Han-Shen Chen (2014). A Study on Green Consumer Intention of Portable Hydrogen Fuel Cells, Energy Education Science and Technology, Part A: Energy Science and Research, 32(3),2027-2036. (EI)</li>
                        <li>Han-Shen Chen (2014). A Study on Benefit Evaluation of Recreational Resource by Developing Ecotourism in Tropical Islands. Journal of Geography & Natural Disasters. 4(1),119-126.</li>
                        <li>Han-Shen Chen (2014). Applying Technology Acceptance Model to Explore the Adoption of Hydrogen-Electric Motorcycle in Taiwan, Applied Mechanics and Materials, 459, 494-498. (EI)</li>
                        <li>Han-Shen Chen and Chia-Yon Chen (2014). A Study on Willingness to Pay of Hydrogen Energy and Fuel Cell Technologies, Applied Mechanics and Materials, 448-453, 4333-4337. (EI)</li>
                        <li>Han-Shen Chen (2013). Empirical applications of an environmental stress indicator and the environmental efficiency revolution in Taiwan, Environmental Skeptics and Critics ,2(3), 82-96.</li>
                        <li>Han-Shen Chen,Li-Hsien Chien and Tsuifang Hsieh (2013). A Study of Assessment indicators for Environmental Sustainable Development of Science Park in Taiwan. Environmental Monitoring and Assessment.185(8),7001-7012. (SCI)</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2011). Exploration of sustainable development by applying green economy indicators, Environmental Monitoring and Assessment, 182(1-4),279-289. (SCI).</li>
                        <li>Han-Shen Chen and Tsuifang Hsieh (2011). A Study of Antecedents of Customer Repurchase Behaviors in Chain Store Supermarkets, Journal of International Management Studies, 6(3), 48-58. October 2011.</li>
                        <li>陳翰紳、王琳閔、陳家榮(2011)，「不同生活型態消費者對攜帶式氫燃料電池消費 意圖之研究」，碳經濟，第 22 期，頁 90-98，民國 100 年 9 月。</li>
                        <li>Han-Shen Chen and Tsuifang Hsieh (2011). Empirical research on constructing Taiwan’s eco-environmental stress index system, African Journal of Environmental Science & Technology, 5(4), 337-347, April 2011.</li>
                        <li>Han-Shen Chen and Tsuifang Hsieh (2011). An environmental performance assessment of the hotel industry using an ecological footprint, Journal of Hospitality Management and 4 Tourism, 2(1), 1-11, January 2011.</li>
                        <li>Han-Shen Chen, Ya-Hsuan Hsu and Tsuifang Hsieh (2011). Exploring the sustainable development for tourism destination by applying an ecological footprint, Thailand Econometrics Society ,3(3), 205-219.</li>
                        <li>Tsuifang Hsieh , Tzu-yin Wu and Yungkun Chen*(2010). The Impact of Online Negative Word-of-Mouth on Customer Purchase Decision for the Travel Websites, Journal of US-China Public Administration. 2010.7(7), 65-76. (*Corresponding author）</li>
                        <li>Yungkun Chen and Tsuifang Hsieh(2010). A Study of Antecedents of Customer Behavior Response in the Medical Aesthetics Industry, Journal of Pacific Management Review, 81-96.</li>
                        <li>Yungkun Chen and Tsuifang Hsieh(2010). A study of the relationship among experiential marketing, experiential value and customer satisfaction, Journal of Statistics & Management Systems,13(6),1283-1303. (EI)</li>
                        <li>黃文星、陳永坤(2009)，「文化元素置入廣告之效果研究-以台灣原住民文化元素為例」， 朝陽商管評論，第八卷，第三-四期合刊，頁1-23，民國98年12月。</li>
                        <li>黃文星、陳永坤、黃于真(2009)，「虛擬人物代言人廣告效果之研究」，育達商管學報， 第四期，頁199-210，民國98年7月。</li>
                        <li>Tsuifang Hsieh and Yungkun Chen* (2009). Interactive Quality Control of Service Encounters in theme Restaurants, Journal of Global Business Issues, 3(2), 85-94, Summer/ Fall, 2009. (*Corresponding author)</li>
                        <li>Yungkun Chen and Tsuifang Hsieh(2009). Study on Relationship among Internal Customer Orientation Market Orientation and Organizational Performance of Theme Restaurants, The Journal of International Management Studies, 4(2):165-174.</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2009). Establishment and applied research on environmental sustainability assessment indicators in Taiwan, Environmental Monitoring and Assessment, 155(1):407-417. (SCI).</li>
                        <li>Jung-Feng Cheng, Chia-Yon Chen, Yung-kun Chen and Chun-Chu Liu (2009). Food and Beverages Management Performance of Taipei International Tourist Hotels, The Business Review, Cambridge, 12, Summer 2009.</li>
                        <li>Yungkun Chen, Wan-Tran Huang and Tsuifang Hsieh (2009), The Study on Service Quality and Customer Satisfaction by Applying Discriminate Analysis for Taiwan's Nursing Hotel, International Journal of Electronic Customer Relationship Management, 3(2),186-206, 2009.</li>
                        <li>Tsuifang Hsieh and Yungkun Chen* (2009), Using the Grey Relational Theory to Explore Customer Relationship Management in Travel Websites, Journal of Global BusinessIssues, 2(3), Spring, 2009. (*Corresponding author）</li>
                        <li>Wan Tran Huang, YungKun Chen*, Tsuifang Hsieh and Hsing Fen Ho(2009), The Willingness of Tourists to Revisit the East Coast National Scenic Area in Taiwan, 5 International Journal of Electronic Customer Relationship Management, 3(2):149-166. (*Corresponding author)</li>
                        <li>Tsuifang Hsieh and Yungkun Chen* (2008). Diagnosing Taiwan tourism industrial problems from the perspective of WTO service trade, The Business Review, Cambridge, 11(2), December 2008. (*Corresponding author）</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2008). Evaluation of the economic value of world culture heritage- learning from the example of the Great Wall of China, The Journal of American Academy of Business, Cambridge, 13(2):160-168.</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2008). Application of grey relational analysis to studying consumer behavior of motel guests, The Business Review, Cambridge, 10(1):111-118.</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2008). Lifestyle segmentation, recreational benefits and consumption behavior of tourists visiting hot spring areas, The Journal of Global Business Management, 4(1): 232-238.</li>
                        <li>Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2007). Correlation of service quality, customer satisfaction, customer loyalty and life style at hot springs hotels, Journal of International Management Studies, 2(2):51-59.</li>
                        <li> Yungkun Chen, Chia-yon Chen and Tsuifang Hsieh (2007). A study of the correlations between consumption experience, customer satisfaction, brand image and behavior intention of motels in Taiwan, The Journal of Global Business Management, 3(1):211-221.</li>
                    </ol>
                    <p>研討會論文</p>
                    <ol>
                        <li>陳翰紳、張珍寧、陳昱亘、徐嘉君 (2017)，「消費者對低碳飲食購買意圖之研究」，第 十七屆觀光休閒暨餐旅產業永續經營學術研討會，高雄餐旅大學，2017 年 11 月 29 日。</li>
                        <li>陳翰紳、徐嘉君、陳昱亘、張珍寧(2017)，「醫療觀光顧客關係管理之研究」，2017 新 南向政策學術研討會，南台科技大學，2017 年 10 月 28 日。</li>
                        <li>黃文星、林怡君、陳翰紳(2017)，「原鄉工作坊商業模式之分析-以埔里鎮芽檬工作坊為 例」，2017 原住民族研究論文發表會，嘉義大學，2017 年 10 月 26-27 日。</li>
                        <li>陳翰紳、曾涵琳、陳昱亘(2017)，「應用延伸性計畫行為理論探討消費者對綠色旅館之 行為意圖」，2017 第十九屆休閒、遊憩、觀光學術研討會，嘉義大學，2017 年 9 月 10 日。</li>
                        <li>Han-Shen Chen (2017). Establishment and Applied Research on Small Island Eco-Security Assessment Model. The Asian Conference on Sustainability, Energy & the Environment (ACSEE2017). Kobe, Japan. June 8-11, 2017.</li>
                        <li>陳翰紳、鄧旭茹、劉俐萍、蔡佛幸、吳沛勳(2017)，「消費者對醜食購買意願前置因素 6 之探討」，2017 文化與休閒學術研討會，台東大學，2017 年 5 月 19 日。</li>
                        <li>陳翰紳、鄧旭茹、陳琬潔、陳曉涵(2017)，「大學生對健康飲料購買意願之研究」，2017 綠色、運動休閒暨餐旅管理學術研討會，朝陽科技大學，2017 年 5 月 16 日。</li>
                        <li>黃文星、陳翰紳 (2017)，「商業模式圖運用於部落旅遊行程規劃之個案探討」，2017 第十八屆管理學域國際學術研討會，朝陽科技大學，2017 年 5 月 16 日。</li>
                        <li>陳翰紳、羅羽伶、廖苡筑(2016)，「觀光旅館實習生留任意願前置因素之探討」，2016 第十八屆休閒、遊憩、觀光學術研討會，虎尾科技大學，2016 年 10 月 29 日。</li>
                        <li>Han-Shen Chen (2016). The Establishment of Evaluation Model of Land-Use Change and Its Application. The European Conference on Sustainability, Energy & the Environment (ECSEE2016). Brighton, UK. July 7-10, 2016.</li>
                        <li>Han-Shen Chen (2016). The Establishment of Evaluation Model of Ecosystem Services and Eco-Security and its Application. International Conference on Civil, Agricultural & Environmental Engineering (CAGEE-16). Hong Kong, May 16-17, 2016.</li>
                        <li>邱皓辰、古岱玉、陳翰紳*(2015)，「懷舊餐廳目的地意象、場所依戀、幸福感與行為意 圖之研究」，第十一屆全國學生休閒、觀光、遊憩學術論文研討會，大葉大學，2015 年6月27日。(*擔任通訊作者)</li>
                        <li>陳宥愷、邱皓辰、陳翰紳* (2015)，「導遊及領隊人員之逆境商數對幸福感之研究」， 2015中華創新管理研討會，朝陽科技大學，2015年6月18日。(*擔任通訊作者)</li>
                        <li>黃美雲、陳聿清、陳翰紳* (2015)，「產銷履歷產品購買意願前置因素之研究」，2015 中華創新管理研討會，朝陽科技大學，2015 年 6 月 18 日。(*擔任通訊作者)</li>
                        <li>陳楷婷、張曉平、陳翰紳*、邱皓辰(2015)，「國際觀光旅館工作鑲嵌、組織承諾與留任 意願之相關研究—以組織氣候為干擾變項」，榮獲優良論文獎，2015觀光餐旅暨運輸服 務學術研討會，萬能科技大學，2015年5月29日。(*擔任通訊作者)</li>
                        <li>謝佳珊、袁小平、陳翰紳* (2015)，「應用目標導向行為模式探討綠色旅館消費行為之 研究」，2015 休閒、運動、觀光暨餐旅學術研討會，亞洲大學，2015 年 5 月 9 日。</li>
                        <li>Han-Shen Chen (2014), “The Development and Application of a Wetland Ecosystem Evaluation Model” , 2014 3rd International Conference on Challenges in Environmental Science and Computer Engineering(CESCE2014).London, UK. June 21-22, 2014.</li>
                        <li>Hsuju Teng, Han-Shen Chen* , Peiyi Lin(2014) , “The influence of consumer’s purchasing intention on sugar labelling of sugar – sweetened beverages”,13th Asia Pacific Forum for Graduate Students Research in Tourism(APF). Kaohsiung, Taiwan. May 14-16, 2014.</li>
                        <li>黃文星、陳翰紳*、柯伊真、游仲弘(2014)，「碳標籤對廣告溝通效果及購買意願影響之 研究」，2014經營管理研討會，台北科技大學，2014年6月13日。</li>
                        <li>楊順臣、陳翰紳*、黃文星、陳注維(2014)，「不同飲食文化族群對低碳飲食購買意圖與 願付價格之研究」，2014 觀光餐旅暨運輸服務學術研討會，榮獲優秀論文獎，萬能科 技大學，2014 年 5 月 30 日。</li>
                        <li>陳翰紳、鄧旭茹、程上瑜、鄭紫君(2014)，「包裝食品營養標示對購買意願前置因素之 研究」，2014 創新管理與設計跨域學術研討會，遠東科技大學，2014 年 5 月 30 日。</li>
                        <li>Han-Shen Chen, Tsuifang Hsieh (2013), “Using Transaction Cost Theory to Evaluate Outsourcing Decision-making in the Tourist Hotel Industry”, 2013 The International academic workshop on social science (IAW-SC2013),Changsha, Hunan, China. October 18-20, 2013. ISBN：978-90-78677-84-0.</li>
                        <li>陳注維、呂佳茹、陳翰紳*(2013) ，「以生態足跡評估金門國家公園環境永續發展之研 究」，2013第15屆休閒、遊憩、觀光學術研討會，東海大學，民國102年9月28日，ISBN： 978-957-2996-28-7。(*擔任通訊作者)。</li>
                        <li>黃萬傳、趙國吉、陳翰紳*、鄧旭茹(2013) ，「產品碳標籤對購買意願前置因素之研究」， 2013 國際當代管理論壇(上冊)，中國華僑大學廈門工學院，2013 年 6 月 8 日，ISBN： 978-986-6600-56-2。(*擔任通訊作者)。</li>
                        <li>黃子娟、黃文星、陳翰紳、陳彥均(2013)，「消費者民族意識與語言書寫方式對廣告溝 通效果影響之研究－以海峽兩岸為例」，2013中華創新管理學會學術暨實務研討會，朝 陽科技大學，2013年5月30日。</li>
                        <li>陳注維、呂佳茹、陳翰紳*(2013) ，「金門國家公園生態安全評量之研究」，2013年管 理思維與實務暨管理資訊計算聯合學術研討會，銘傳大學，2013年5月17日，(*擔任通 訊作者)。ISBN：978-986-89476-5-8。</li>
                        <li>陳注維、呂佳茹、陳翰紳*(2013) ，「金門國家公園懷舊民宿生態足跡之研究」，2013 觀光產業經營管理學術研討會，台灣首府大學，2013年5月3日。(*擔任通訊作者)。</li>
                        <li>陳翰紳、陳家榮、陳翰寬(2012)，「綠色消費態度、知覺風險、知覺價值和願付價格之 研究－以氫燃料電池電動機車為例」，榮獲碩士論文獎佳作，第七屆全國氫能與燃料電 池學術研討會論文，勤益科技大學，2012年10月26-27日。</li>
                        <li>黃文星、陳翰紳、江淑華、黃子娟(2012)，「原鄉部落休閒旅遊之研究-以南投縣地利及 雙龍兩部落為例」，榮獲論文獎優等，2012年全國原住民族研究論文發表會，嘉義大學， 2012年10月18-19日。</li>
                        <li>陳翰紳、陳家榮、陳翰寬(2012)，「綠色消費態度、知覺風險、知覺價值對氫燃料電池 電動機車購買意願關聯性之研究」，第十三屆全國氫能會議暨第5屆兩岸三地氫能研討 會，中國南京大學，2012年9月21-23日。</li>
                        <li>張瓊之、陳翰紳*、陳家榮(2012)，「國家公園環境承載力評量模型之建立與應用研究 1. 」，2012第十四屆休閒、遊憩、觀光學術研討會，東華大學，2012年10月5日。ISBN： 978-986-86593-5-3。(*擔任通訊作者)。</li>
                        <li>趙國吉、黃文星、陳翰紳*(2012)，「應用交易成本理論探討觀光旅館外包決策評估模式 之研究」，榮獲最佳論文獎，2012年海峽兩岸觀光旅遊研討會，北京第二外國語學院， 2012年08月26-28日(*擔任通訊作者)。</li>
                        <li>Han-Shen Chen, Tsuifang Hsieh(2012)，“The Effect of Nutrition Information Disclosure on 8 Menus on Consumer’s Product Evaluation, Selection, and Willingness to Purchase”, 2012 18th Asia Pacific Tourism Association Conference(APTA). Taipei, Taiwan. June 26-29, 2012.</li>
                        <li>張瓊之、陳翰紳*、陳家榮(2012)，「國家公園旅遊交通生態足跡模型之建立與應用研究 」，2012第一屆海洋觀光暨運動休閒產業國際學術研討會，澎湖科技大學，2012年06 月1-3日。 (*擔任通訊作者)。</li>
                        <li>陳翰紳、黃萬傳、趙國吉、吳玉珊(2012)，「台灣糯米製品零售商運銷通路及消費型態 之研究」，2012農企業暨生物產業學術研討會，屏東科技大學，2012年05月25日。</li>
                        <li>陳翰紳、陳注維(2012)，「生態渡假島嶼環境認知、環境態度、環境敏感度與環境行為 關聯性之研究」，2012第二屆國際餐旅管理論文研討會，東海大學，2012年05月11日， ISBN： 978-986-5990-07-7。</li>
                        <li>陳翰紳、陳注維(2012)，「民宿業生態足跡模型之建構與應用研究」，2012海峽兩岸休 閒產業與鄉村旅遊學術研討會，暨南大學，2012年04月01-02日，ISBN： 978-957-496-730-8。 38. Han-Shen Chen, Chia-Yon Chen, Tsuifang Hsieh(2012)，“Research on the Consumption Intention of Consumers in Different Lifestyles for Portable Hydrogen Fuel Cell”, 2012 3rd IAEE Asian Conference. Kyoto, Japan. February 20-22, 2012.</li>
                        <li>Han-Shen Chen, Tsuifang Hsieh, Wen-Shin Huang(2011) “ The dynamic assessment model on tourism environmental carrying capacity in Taroko National Park”, World Research Summit for Tourism & Hospitality. Hong Kong. December 10-13 , 2011.</li>
                        <li>黃文星、陳翰紳、陳姵嵐、洪惟善(2011)，「Facebook 社群網站口碑傳播、知覺風險對 消費者購買決策影響之研究」，2011 第七屆企業國際化理論與實務研討會，長榮大學， 民國 100 年 11 月 18 日。</li>
                        <li>陳翰紳、江曉虹、王斯頤(2011)，「銀髮族參與農業體驗活動對休閒效益影響之研究」， 2011 健康與管理學術研討會，元培科技大學，民國 100 年 10 月 29 日。</li>
                        <li>陳翰紳、陳家榮、陳育珩(2011)，「消費者對創新產品消費意圖之研究－以攜帶式氫燃 料電池為例」，第四屆海峽兩岸能源經濟學術研討會，中國浙江大學，民國100年10月 21-24日。</li>
                        <li>陳翰紳、陳注維(2011)，「創新接受度、產品創新認知與行為意向關聯性之研究－以氫 燃料電池電動機車為例」，第十二屆全國氫能會議暨第四屆兩岸三地氫能研討會，中國 武漢，民國100年10月14-17日。</li>
                        <li>吳姿音、陳翰紳、盧群昇(2011)，「學習動機、學習壓力與學習滿意度的關聯性研究－ 以觀光與休閒管理系的學生為例」，2011餐旅休閒與觀光教育發展及趨勢國際學術研討 會，美和科技大學，民國100年10月14-15日。</li>
                        <li>Han-Shen Chen and Tsuifang Hsieh (2011) “Potential Demands of Portable Hydrogen Fuel Cells in a 3C Market ”, 2011 International Conference on Biotechnology and Environment 9 Management (IPCBEE2011). Singapore. Sep16-18. ISSN:2010-4618.</li>
                        <li>陳翰紳、陳家榮、王琳閔(2011)，「氫能源應用產品市場分析」，兩岸低碳社會與綠色 成長推動策略研討會，中華經濟研究院，民國 100 年 9 月 14-15 日。</li>
                        <li>陳翰紳、楊安慈、陳昱宏(2011)，「應用模糊德爾菲層級分析法和灰關聯分析探討觀光 旅館外包決策評估模式之研究」，2011 第 13 屆休閒、遊憩、觀光學術研討會，世新大 學，民國 100 年 9 月 10 日，ISBN：9789868659322。</li>
                        <li>凃惠娟、陳翰紳(2011)，「休閒餐廳內部顧客導向、工作不滿足對服務績效關係之研究」， 2011 第 13 屆休閒、遊憩、觀光學術研討會，世新大學，民國 100 年 9 月 10 日，ISBN： 9789868659322。</li>
                        <li>陳翰紳、陳家榮、王琳閔、柯酈(2011)，「氫能源應用產品消費意圖之研究－以攜帶式 氫燃料電池為例」，第一屆兩岸/第五屆資源工程研討會，成功大學，民國 100 年 7 月 21-22 日。</li>
                        <li>Wen-Shin Huang, Tsuifang Hsieh, Han-Shen Chen*(2011). “The Impact of Animated Spokes-Characters and Production Involvement on Advertising Effect ”.International Conference on Innovation and Management (IAM2011).Kuala Lumpur, Malaysia. July 12–15, 2011(*Corresponding author)</li>
                        <li>黃文星、陳翰紳、張鈞植、簡依萍(2011)，「在不同涉入程度及類型下虛擬代言人特性 及廣告效果之研究」，2011 經營管理理論與實務研討會，榮獲優良論文獎，亞洲大學， 民國 100 年 6 月 18 日。</li>
                        <li>Han-Shen Chen, Wan-Tran Huang, Ya-Shai Hsu, and Chun-Yu Chien (2011) “The Performance Appraisal of Taiwan Tourism Service Quality by Chinese, Japanese, and South Korean Tourists ”, 9th APacCHRIE Conference Hospitality and Tourism Education: From a VisiontoanIcon . Hong Kong , Jun 2-5, 2011.</li>
                        <li>陳翰紳、謝翠芳、吳姿音(2011)，「領隊人員工作壓力與工作倦怠之關聯性研究－以知 覺組織支持為調節變項」，2011 第二屆餐旅管理學術與實務研討會，明道大學，民國 100 年 5 月 27 日。</li>
                        <li>陳翰紳、黃文星、謝翠芳(2011)，「辦桌消費者飲食消費文化與行為意圖關聯性之研究」， 2011 美食觀光-環境永續的挑戰學術研討會，高雄餐旅大學，民國 100 年 5 月 19-20 日。</li>
                        <li>黃文星、陳翰紳、張鈞植、簡依萍(2011)，「虛擬代言人特性及廣告效果之研究」， 2011 第十二屆管理學域學術研討會，朝陽科技大學，民國 100 年 5 月 3 日。</li>
                        <li>Han-ShenChen , Tsuifang Hsieh , Tzu-Yin Wu(2011) “Brand Equity and Brand Relationship Impacts on Customer Repurchase Behaviors in Chain Store Supermarkets”, Proceedings of ICEEM, 2011 International Conference on Economic, Education and Management. Macao , March 5-6,2011. ISBN 978-988-18242-8-8</li>
                        <li>黃文星、陳翰紳、李柏叡、陳姵嵐(2010)，「消費者民族意識與語言態度對廣告溝通效 果影響之研究」，2010 商業管理與資訊應用學術研討會，臺北商業技術學院，民國 99 10 年 12 月 8 日。</li>
                        <li>陳翰紳、黃文星、趙國吉(2010)，「懷舊餐廳品牌知名度、品牌形象、知覺品質、品牌 關係與再購意願之研究」，2010全國餐飲創新研發暨文化深耕產學合作學術與實務研討 會，高雄餐旅大學，民國99年11月26日，ISBN： 978-986-02-5654-3。</li>
                        <li>陳翰紳、吳姿音、吳權恆(2010)，「長期照護機構顧客關係管理之研究」，2010 年健康 照護應用與工程研討會論文，亞東技術學院，民國 99 年 11 月 12 日。</li>
                        <li>YungkunChen , Tsuifang Hsieh(2010) “Integrating Fuzzy Delphi Analytic Hierarchy Process and Grey Relational Analysis to Study the New Product Development Strategy on Hydrogen and Fuel Cell Industry ”, The 2010 International Conference on Innovation and Management. Penang , Malaysia. July 7-10 ,2010.</li>
                        <li>黃文星、陳永坤、盧貞伶(2010)，「消費者民族意識對語言態度、廣告效果及購買意願 之影響」，2010 當代管理論壇，大葉大學，民國 99 年 6 月 4 日。</li>
                        <li>林欣怡、陳永坤(2010)，「運用平衡計分卡建構台灣地區連鎖超市供應鏈之績效評估系 統」，2010 年產業全球化運籌管理學術與實務研討會，東方技術學院，民國 99 年 5 月 28 日，ISBN 978-986-6415-07-4。</li>
                        <li>陳永坤、黃文星、陳注維(2010)，「景觀餐廳驅動因素對顧客體驗及品牌資產之關聯性 研究」，2010第三屆中部技職院校行銷與流通管理學術研討會，朝陽科技大學，民國99 年5月4日。</li>
                        <li>Yungkun Chen, Chia-Yon Chen, Tsuifang Hsieh(2010) “ Emergy Analysis of Ecological Economic System in Taiwan ”, 2010 International Conference on Earth Engineering and Science (EES 2010). Singapore. February 26-28, 2010. ISBN 978-1- 84626- 024-7.</li>
                        <li>YungkunChen , Tsuifang Hsieh(2010) “A Research of Assessment Indicators for Ecocity Sustainable Development ”, The first International Conference on Environmental Pollution, Restoration, and Management (SETAC Asia/Pacific Joint Conference). Ho Chi Minh City, Vietnam. March 1-5,2010.</li>
                        <li>Chu, Y, TsuifangHsieh , Yungkun Chen* (2010) “A Study of The Correlations between Customer Complaints, Fairness Handling and Customer Behavior Intentions ”, 2010 International Conference on APBITM. Cebu , Philippines. January 24-26, 2010. ISBN 978-971-94544-0-3 (*Corresponding author)。</li>
                        <li>張乘瑜、謝清隆、陳永坤* (2009)，「銀髮族出國旅遊動機、購物行為與旅遊體驗之研 究」, International Sociological Association Research Committee on Sociology of Leisure (RC13)Mid-term Conference. PekingUniversity , Beijing China , October 23-26 , 2009. (*擔 任通訊作者)。</li>
                        <li>陳永坤、吳姿音、謝清隆(2009)，「應用資料包絡法探討旅遊服務品質績效評估之研究」， 2009 第 11 屆休閒、遊憩、觀光學術研討會，暨南國際大學，民國 98 年 9 月 26 日。 11</li>
                        <li>吳姿音、陳永坤* (2009)，「連鎖超市品牌權益、品牌關係與顧客重購行為影響之研究」， 2009 商業管理研討會，台北科技大學，民國 98 年 6 月 19 日(*擔任通訊作者）。</li>
                        <li>陳永坤、鄭榮峰、謝翠芳、楊浩偉(2009)，「國際觀光旅館餐廳績效評估之研究」，2009 海峽兩岸觀光與休閒產業經營管理研討會，東方技術學院，民國 98 年 5 月 15 日。</li>
                        <li>黃萬傳、陳永坤*、黃崇憲、徐雅萱(2009)，「創新農業組織經營關鍵因素之研究」，2009 創新創業與企業永續經營研討會，屏東商業技術學院，民國 98 年 5 月 15 日，ISBN 978-986-01-8501-0(*擔任通訊作者）。</li>
                        <li>陳永坤、謝翠芳、吳姿音、徐雅萱(2009)，「溫泉旅館顧客參與、服務失誤歸因與顧客 行為反應之關聯性研究」，2009 服務創新研討會，明新科技大學，民國 98 年 4 月 8-9 日，ISBN: 978-986-81259-1-7-1。</li>
                        <li>黃萬傳、陳永坤、徐雅萱(2008)，「台灣三大都會區消費者對稻米產銷履歷認知之分析」， 2008兩岸農業可持續發展研討會－建設和諧新農村，中國南京農業大學，民國97年12 月12-13日。</li>
                        <li>張文賢、陳永坤(2008)，「台灣農業科技研發成果運用現況與問題」，2008 兩岸農業可 持續發展研討會－建設和諧新農村，中國南京農業大學，民國 97 年 12 月 12-13 日。</li>
                        <li>謝翠芳、陳永坤、吳姿音、沈玉琦(2008)，「主題餐廳內部顧客導向、市場導向與組織 績效關係之研究」，2008 年第 2 屆海峽兩岸科技與人文教育暨產學合作研討會，勤益 科技大學，民國 97 年 12 月 4-5 日。ISBN:978-957-21-6668-0。</li>
                        <li>陳永坤、謝翠芳、吳姿音、沈玉琦(2008)，「熱帶島嶼生態旅遊資源經濟效益評估與策 略研擬之研究」，2008 地方特色產業風格管理與體驗創意經濟發展論壇，中華大學， 民國 97 年 10 月 31 日。</li>
                        <li>Yungkun Chen, Hui-Chuan Tu, Tsuifang Hsieh, Meei-Ying Lan(2008). “Assessment for economic development stress status and trends of eco-environment”, The Fourth National Conference of Economists. Chiang-Mai University, Thailand. October 24, 2008.</li>
                        <li>Wan-Tran Huang,Yungkun Chen*, Tsuifang Hsieh(2008). “Empirical applications of an environmental stress index and the environmental efficiency revolution in Taiwan”, The Fourth National Conference of Economists. Chiang-Mai University, Thailand. October 24, 2008. (*Corresponding author）</li>
                        <li>鄭榮峰、謝翠芳、陳永坤、陳家榮(2008)，「應用生態足跡法探討旅館業環境管理績效 評估之研究」，第十屆休閒、遊憩、觀光學術研討會暨國際論壇，世新大學，民國 97 年 9 月 20 日。</li>
                        <li>Yungkun Chen, Chia-yon Chen, Tsuifang Hsieh(2008). “Exploration of the growth of international service trade from the perspective of tourism development in Taiwan”, The 8th Biennial Conference on Tourism in Asia Angers. France, July 2-4, 2008. ISBN: 978-962-367-610-6.</li>
                        <li>Yungkun Chen, Chia-yon Chen, Tsuifang Hsieh,Ling-Chen Chang(2008). “A study of the 12 correlations between consumption experience, customer satisfaction, brand image and behavior intention of tourist for health tourism in Taiwan”, The 8th Biennial Conference on Tourism in Asia Angers. France. July2-4, 2008. ISBN：978-962-367-610-6.</li>
                        <li>陳永坤、謝翠芳、吳姿音、沈玉琦(2008)，「主題餐廳服務接觸互動質量控制之研究」， 2008 餐旅管理學術與實務研討會，榮獲優良論文獎，明道大學，民國 97 年 6 月 11 日。</li>
                        <li>陳永坤、謝翠芳、沈玉琦(2008)，「主題遊樂園顧客體驗價值之研究」，2008 觀光與休 閒產業經營管理論文研討會，東方技術學院，民國 97 年 5 月 29 日。</li>
                        <li>陳永坤、陳家榮(2007)，「台灣永續發展評估指標之衡量－生態足跡法之應用」，2007 綠色環境經營管理研討會，僑光技術學院，民國 96 年 11 月 2 日。</li>
                        <li>Wan-Tran Huang, Chuan-Yuan Chen, Yungkun Chen(2007). “Integrating DEA and SFA approach to the comprehensive performance evaluation system in logistics enterprise”, Resource Use Efficiency and Productivity in Production, Marketing and Finance, the Quantitative Analysis Center School of Economics. Chiang-Mai University, Thailand. September 14. 2007.</li>
                        <li>陳永坤、陳家榮(2007)，「台灣環境永續評估指標之建立與應用研究」，2007 環境資源 經濟、管理暨系統分析學術研討會，台北大學，民國 96 年 9 月 14 日。</li>
                        <li>林百也、陳永坤、李貞(2007)，「精品汽車旅館服務創新管理之研究」，2007 跨世紀休 閒產業新趨勢研討會，明道大學，民國 96 年 7 月 6 日。</li>
                        <li>陳永坤、吳姿音、謝清隆(2007)，「應用灰關聯分析探討醫學美容中心顧客消費行為之 研究」，2007 健康產業管理國際學術研討會，中台科技大學，民國 96 年 6 月 13 日。</li>
                        <li>Yungkun Chen, Chia-yon Chen, Tsuifang Hsieh(2007) “Application of neural network to customer relation management- Taking Taiwan’s nursing hotel for example”, 2007 Association of Marketing Theory & Practice Conference. Florida, America. March 29-31, 2007.</li>
                    </ol>
                    <p>專書及專書論</p>
                    <ol>
                        <li>鄭焜中、蔡伯健、陳翰紳等人合著(2013)，行銷企劃個案，鼎茂圖書出版，2013 年 4 月。</li>
                        <li> 鄭焜中、蔡伯健、陳翰紳等人合著(2012)，行銷企劃案撰寫實務，鼎茂圖書出版，2012 年 4 月。</li>
                        <li>徐明龍、陳永坤等人合著(2009)，觀光統計學，鼎茂圖書出版，2009 年 9 月。</li>
                        <li>陳永坤(2008)，「臺灣環境永續發展評估指標之建立與應用研究」，國立成功大學資源工 程研究所經濟管理組，未出版之博士論文，2008 年 5 月。</li>
                        <li>陳永坤等人合譯(2006)，經濟學，普林斯頓圖書出版，2006 年 1 月。</li>
                        <li>陳永坤等人合譯(2005)，經濟學(下)，普林斯頓圖書出版，2005 年 1 月。</li>
                        <li>陳永坤等人合譯(2004)，經濟學(上)，普林斯頓圖書出版，2004 年 8 月。 13</li>
                        <li>陳永坤(1994)，「臺灣山坡地開發使用問題及其管理之研究」，國立中興大學農業經濟研 究所，未出版之碩士論文，1994 年 6 月。</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" id="research_project_heading" data-toggle="collapse" data-target="#research_project" aria-expanded="false" aria-controls="research_project">
                <h5 class="mb-0">
                    <span class="plus_icon"></span>
                    研究計畫及產學合作
                </h5>
            </div>
            <div id="research_project" class="collapse" aria-labelledby="research_project_heading">
                <div class="card-body">
                    <p>科技部補助專題研究計畫</p>
                    <ol>
                        <li>106 年度，專題研究計畫，「小型島嶼生態系統服務價值評量模型之建立與應用研究」，計畫主持人，MOST 106-2410-H-040-014。</li>
                        <li>105 年度，專題研究計畫，「整合生態系統服務與生態安全於小琉球永續發展評估之研 究」計畫主持人，MOST 105-2410-H-040-013。</li>
                        <li>104 年度，專題研究計畫，「土地使用變遷與生態安全評估模式之建立與應用研究」，計畫主持人，MOST 104-2410-H-040-010</li>。
                        <li>102 年度，專題研究計畫，「濕地生態系統評估模式之建立與應用研究」，計畫主持人， NSC 102-2410-H-040-010。</li>
                        <li>101 年度，能源國家型科技計畫，「氫能源科技應用與效益評估(3/3) 」，共同主持人， NSC 101-3113-P-006-019。</li>
                        <li>100 年度，能源國家型科技計畫，「氫能源科技應用與效益評估(2/3) 」，共同主持人， NSC 100-3113-P-006-004。</li>
                        <li>100 年度，專題研究計畫，「國家公園環境承載力、生態安全與遊憩資源價值評量模型之 建立與應用研究」，計畫主持人， NSC 100-2410-H-040-010。</li>
                        <li>98 年度，能源國家型科技計畫，「氫能源科技應用與效益評估(1/3) 」，共同主持人，NSC 98-3114-P-006-002。</li>
                        <li>98 年度，專題研究計畫，「生態城市永續發展評估指標之建立與應用研究」，計畫主持人， NSC98-2410-H-235-004。</li>
                        <li>98 年度，專題研究計畫，「台灣永續發展評量模型之建立與應用研究(3/3)」，共同主持人， NSC96-2416-H-006-025。</li>
                        <li>97 年度，專題研究計畫，「台灣永續發展評量模型之建立與應用研究(2/3)」，共同主持人，NSC96-2416-H-006-025。</li>
                        <li>96 年度，專題研究計畫，「台灣永續發展評量模型之建立與應用研究(1/3)」，共同主持人，NSC96-2416-H-006-025。</li>
                        <li>93 年度，專題研究計畫，「山坡地多目標利用系統分析」，共同主持人， NSC93-2416-H-006-025。
                    </ol>
                    <p>其他政府機關、民間機構或團體補助計畫</p>
                    <ol>
                        <li>104 年度，勞動部勞動力發展署就業學程計畫，「健康餐飲暨產業管理學程計畫」，共同主持人。</li>
                        <li>101年度，交通部觀光局，「嘉義縣布袋鎮餐廳碳足跡與分析計畫」，計畫主持人。</li>
                        <li>100年度，農委會，「國內糯米運銷通路及消費型態之調查分析」，共同主持人，計畫編 號：100農糧-5.5-產-02。</li>
                        <li>98年度，農委會，「農業創新經營組織類型與發展研究-農業創新經營之診斷與輔導」，共同主持人，計畫編號：98農科-5.2.1-輔-#1。</li>
                        <li>98年度，農委會，「台灣與德國農業經營促進農村活化策略之比較研究」，共同主持人，計畫編號：98農科-4.1.1-國-I3(4)。</li>
                        <li>98年度，農委會，「拓展國產水果團購新興通路之研究」，共同主持人，計畫編號：98 農科-5.1.2-糧-Z1(4)。</li>
                        <li>98年度，勞委會職訓局就業學程計畫，「門市服務管理就業學程計畫」，共同主持人。</li>
                        <li>95年度，農委會，「台灣發展生質能源政策之研究-以德國為借鏡」，協同主持人，計畫 編號：95農科-1.2.1-國-I2(2)。</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
    $( "#education_heading" ).click(function() {
        $( ' #education_heading>h5>.plus_icon' ).toggleClass( "active" );
    });
    $( "#experience_heading" ).click(function() {
        $( ' #experience_heading>h5>.plus_icon' ).toggleClass( "active" );
    });
    $( "#skill_heading" ).click(function() {
        $( ' #skill_heading>h5>.plus_icon' ).toggleClass( "active" );
    });
    $( "#research_work_heading" ).click(function() {
        $( ' #research_work_heading>h5>.plus_icon' ).toggleClass( "active" );
    });
    $( "#research_project_heading" ).click(function() {
        $( ' #research_project_heading>h5>.plus_icon' ).toggleClass( "active" );
    });
</script>
</body>
</html>