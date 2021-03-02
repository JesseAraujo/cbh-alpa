-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2021 às 20:06
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cbhalpac_noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cbhalpa_noticias`
--

CREATE TABLE `cbhalpa_noticias` (
  `codNot` int(4) NOT NULL,
  `titulo_not` varchar(200) CHARACTER SET latin1 NOT NULL,
  `data_pos_not` date NOT NULL,
  `sub_titulo_not` varchar(500) CHARACTER SET latin1 NOT NULL,
  `descricao_not` varchar(500) CHARACTER SET latin1 NOT NULL,
  `link_not` varchar(200) CHARACTER SET latin1 NOT NULL,
  `palavra_chave_not` varchar(500) CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cbhalpa_noticias`
--

INSERT INTO `cbhalpa_noticias` (`codNot`, `titulo_not`, `data_pos_not`, `sub_titulo_not`, `descricao_not`, `link_not`, `palavra_chave_not`, `imagem`, `data_evento`, `url`) VALUES
(11, 'Processo Eleitoral 2019/2020', '2018-12-03', '', 'Vimos informar que as inscrições para o cadastramento da Sociedade Civil referente ao processo eleitoral do CBH-ALPA...', 'ProcessoEleitoral', 'Processo de Eleicao do Comite Eleição CBH-ALPA Comitê Processo Eleitoral Processo Eleitoral 2019/2020', '', NULL, ''),
(12, 'Portal Agrometeorológico', '2018-12-10', 'Estações meteorológicas automáticas', '', 'PortalAgrometeorologico', 'Estações meteorológicas automáticas Comitê de Bacias Hidrográficas do Alto Paranapanema\r\nPortal Agrometeorológico', '', NULL, 'http://www.ciiagro.org.br/'),
(13, 'ATO CONVOCATÓRIO', '2019-01-28', 'DAEE inicia procedimentos para cobrança pelo uso da água na Bacia do Alto Paranapanema', 'O DAEE (Departamento de Águas e Energia Elétrica) publicou dia 10 de janeiro a portaria número 10/2019 convocando os usuários de recursos hídricos da Bacia Hidrográfica do Alto Paranapanema a se cadastrarem no site do Ato Convocatório do DAEE...', 'AtoConvocatorio', 'ATO CONVOCATÓRIO cobrança pelo uso da água na Bacia do Alto Paranapanema', '', NULL, ''),
(14, 'Recursos Fehidro', '2019-03-01', '', 'Entrega de projetos para solicitações de recursos financeiros e seleção dos investimentos a serem indicados ao FEHIDRO será de 27/03/2019 até o dia 29/03/2019...', 'RecursosFehidro', 'projetos para solicitações de recursos financeiros FEHIDRO recurso solicitação', NULL, NULL, ''),
(15, '45ª Reunião Ordinária do CBH-ALPA', '2019-03-01', '', 'Cumprimentando Vossa Senhoria, servimo-nos do presente para convidá-lo (a) a participar da 45ª Reunião Ordinária do Comitê da Bacia Hidrográfica do Alto Paranapanema CBH-ALPA, conforme programações abaixo...', 'ReuniaoOrdinaria', '45ª Reunião Ordinária do CBH-ALPA Comitê da Bacia Hidrográfica do Alto Paranapanema', NULL, '2019-03-29', ''),
(16, 'Orientação Técnica sobre Resíduos Sólidos - PIRH - Paranapanema - CBH-ALPA/CBH-NP', '2019-03-01', '', '<p><b>Data do evento:</b> 22/03/2019 <br>\r\n<b>Horário:</b> 10:00 <br>\r\n<b>Local:</b> Jacarezinho - PR <br>\r\n<b>Endereço:</b> A definir <br>', '', 'Orientação Técnica sobre Resíduos Sólidos - PIRH - Paranapanema - CBH-ALPA/CBH-NP', NULL, '2019-03-22', ''),
(17, 'Reunião da Câmara Técnica de Assuntos Institucionais', '2019-03-04', '', '<p><b>Data:</b> 12/03/2019<br>\r\n<b>Horário:</b> 09h00<br>\r\n<b>Local:</b> DAEE - Piraju<br>\r\n<b>Endereço:</b> Av. São Sebastião, 125, Vila Cantizani, Piraju/SP', '', 'Reunião da Câmara Técnica de Assuntos Institucionais CT-AI', NULL, '2019-03-12', ''),
(18, 'Semana do Meio Ambiente', '2019-05-27', '', 'Faça sua inscrição clicando <a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdV8TtpITEA6BoXIEPgJQLKdWChVoQPTFFpFZm8V-y1UoOdfg/viewform\" target=\'new\'>AQUI</a>', 'SemanaMeioAmbiente', 'Dia Mundial do Meio Ambiente Workshop cbh alpa cbh-alpa', NULL, '2019-06-05', ''),
(19, 'Reunião ANA junto ao DAEE e ASPIPP', '2019-05-27', '', 'No dia 28/05/2019 às 14 hrs, técnicos da Agência Nacional de Águas, junto aos técnicos do DAEE, órgão gestor do estado de São Paulo no âmbito dos recursos hídricos...', 'ReuniaoANA_DAEE', 'ANA DAEE Reunião Reuniao', NULL, '2019-05-28', ''),
(20, 'NOVA ABERTURA PARA ENTREGA PROJETOS FEHIDRO - 2019', '2019-06-27', '', 'Nova data para entrega de projetos para solicitações de recursos financeiros e seleção dos investimentos a serem indicados ao FEHIDRO', 'NovaAberturaProjetosFehidro', 'recursos financeiros investimentos FEHIDRO projetos', NULL, NULL, ''),
(21, 'Seminário: Resíduos Sólidos e Arborização urbana', '2019-07-05', '', 'Diagnóstico da arborização urbana; Aspectos de drenagem urbana; Identificação botânica; Propostas e alternativas para a implantação do plano de Arborização urbana em municípios. Gestão ambiental e arborização...', 'ResiduosArborizacao', 'Seminário: Resíduos Sólidos e Arborização urbana Gestão ambiental e arborização', NULL, NULL, ''),
(22, 'Reunião com as Câmaras Técnicas', '2019-07-04', '', 'Reunião com as Câmaras Técnicas de Planejamento, Educação Ambiental, Assuntos Institucionais e de Saneamento.', 'ReuniaoCTPJEAAIS', 'Reunião com as Câmaras Técnicas de Planejamento, Educação Ambiental, Assuntos Institucionais e de Saneamento', NULL, NULL, ''),
(23, '40ª Reunião Extraordinária do CBH- ALPA', '2019-07-05', '', 'A Presidente do Comitê da Bacia Hidrográfica do Alto Paranapanema, no uso de suas', '40ReuniaoExtraordinaria', '40ª Reunião Extraordinária do CBH-ALPA CBH ALPA 40', NULL, NULL, ''),
(24, 'Reunião da Conjunta com todas as Câmaras Técnicas', '2019-07-19', '', 'Cumprimentando Vossa Senhoria, servimo-nos do presente para convocá-lo (a) a\r\nparticipar da Reunião da Conjunta com todas as Câmaras Técnicas, conforme\r\nprogramação abaixo...', 'ReuniaoCT', 'Reunião da Conjunta com todas as Câmaras Técnicas CBH CBH-ALPA', NULL, NULL, ''),
(25, 'Reunião das Câmaras Técnicas - PGA e AI', '2019-09-23', '', 'Reunião conjunta com: <br>\r\nCâmara Técnica de Planejamento Gerenciamento e Avaliação de Projetos – PGA e Câmara\r\nTécnica de Assuntos Institucionais – AI.', 'CTPGAAI10102019', 'Câmara Técnica de Planejamento Gerenciamento e Avaliação de Projetos – PGA e Câmara\r\nTécnica de Assuntos Institucionais – AI Reunião CTPGA 03 3 ', NULL, '2019-10-03', ''),
(26, 'XXI ENCOB 2019', '2019-09-18', '', 'XXI ENCOB 2019 - Encontro Nacional de Comitês de Bacia Hidrográficas.', '', 'ENCOB Encontro Nacional de Comitês de Bacia Hidrográficas', NULL, NULL, 'https://www.encob.org/encob2019'),
(27, 'Oficina VerdeAzul - Ciclo 2020', '2019-10-24', '', 'Durante o ciclo PMVA 2020, as oficinas objetivarão o aperfeiçoamento e desenvolvimento das Ações VerdeAzul. Nessa etapa, trataremos apenas das Ações VerdeAzul, ou seja, um total de 16 tarefas.', 'VerdeAzul', 'Oficina VerdeAzul PMVA ', NULL, NULL, ''),
(28, 'Entrega dos Projetos FEHIDRO - 2020', '2020-02-13', '', 'Informamos, que já contamos com data para entrega dos projetos para pleitear recurso do FEHIDRO ( Fundo Estadual de Recursos Hídricos), para o ano de 2020, a data é: das 8:00hs do dia 1º de abril de 2020, (quinta-feira), às 17:00hs do dia 15 de abril de 2020, (quarta-feira).', 'Fehidro2020', '', NULL, NULL, ''),
(29, 'Workshop - Dia Mundial da Água', '2020-03-10', '', 'Convidamos a todos para participar do Workshop do Dia Mundial da Água. Faça sua inscrição aqui para participar.', 'Dia_Mundial_da_Agua_2020', 'Dia Mundial da Água Workshop Convite', NULL, '2020-03-24', ''),
(30, '47ª Reunião Ordinária do CBH- ALPA', '2020-07-24', '', 'A reunião ocorrerá ONLINE. <br>\r\nCaso deseja participar como convidado, envie um e-mail para <a href=\"mailto:cbhalpa@gmail.com?Subject=47%20Reuniao%20Ordinaria%20-%20Convidado\">cbhalpa@gmail.com</a>', '47_Reuniao_Ordinaria_2020', '47ª Reunião Ordinária do CBH-ALPA CBH ALPA\r\no Comitê da Bacia Hidrográfica do Alto Paranapanema Reunião', NULL, '2020-07-28', ''),
(31, 'Reunião da Conjunta com todas as Câmaras Técnicas', '2020-10-30', '', 'Reunião conjunta com Câmara Técnica de:<br><p>\r\n- Planejamento Gerenciamento e Avaliação de Projetos – PGA <br>\r\n- Assuntos Institucionais – AI <br>\r\n- Saneamento e Águas Subterrâneas – SAS <br>\r\n- Educação Ambiental, Capacitação, Mobilização Social e Informação - EA ', 'Reuniao-da-Conjunta-com-todas-as-Camaras-Tecnicas-10.11.2020', 'Reunião da Conjunta com todas as Câmaras Técnicas CT CA ', NULL, NULL, ''),
(32, '48ª Reunião Ordinária do CBH- ALPA', '2020-11-09', '', 'A reunião ocorrerá ONLINE. <br>\r\nCaso deseja participar como convidado, envie um e-mail para <a href=\"mailto:cbhalpa@gmail.com?Subject=47%20Reuniao%20Ordinaria%20-%20Convidado\">cbhalpa@gmail.com</a>', '48_Reuniao_Ordinaria_2020', '48ª Reunião Ordinária do CBH-ALPA CBH ALPA\r\no Comitê da Bacia Hidrográfica do Alto Paranapanema Reunião', NULL, '2020-11-18', ''),
(33, 'Reunião da Conjunta com todas as Câmaras Técnicas', '2020-12-02', '', 'Reunião conjunta com Câmara Técnica de:<br><p>\r\n- Planejamento Gerenciamento e Avaliação de Projetos – PGA <br>\r\n- Assuntos Institucionais – AI <br>\r\n- Saneamento e Águas Subterrâneas – SAS <br>\r\n- Educação Ambiental, Capacitação, Mobilização Social e Informação - EA ', 'Reuniao-da-Conjunta-com-todas-as-Camaras-Tecnicas-07.12.2020', 'Reunião da Conjunta com todas as Câmaras Técnicas CT CA ', NULL, NULL, ''),
(34, 'PROCESSO ELEITORAL CBH-ALPA – Gestão 2021/2022\r\n', '2020-12-09', '', 'O Comitê do Alto Paranapanema (CBH-ALPA) é uma instância colegiada tripartite que discute e define políticas, proposta e projetos para a melhoria e qualidade das águas da Bacia Hidrográfica do Alto Paranapanema. ', 'Processo-Eleitoral-CBH-ALPA-Gestao-2021-2022', 'Comitê do Alto Paranapanema Eleição Processo gestão ', NULL, NULL, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cbhalpa_noticias`
--
ALTER TABLE `cbhalpa_noticias`
  ADD PRIMARY KEY (`codNot`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cbhalpa_noticias`
--
ALTER TABLE `cbhalpa_noticias`
  MODIFY `codNot` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
