async function callApi() {
    const res = await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=25&page=1&sparkline=false');
    const json = await res.json();

    //Extract the necessary information from json into the new array "toplist"
    var toplist = [];
    for (let i = 0; i < json.length; i++) {
        toplist[i] = {};
        toplist[i]["ID"] = json[i]["id"];
        toplist[i]["NAME"] = json[i]["name"];
        toplist[i]["IMG"] = json[i]["image"];
        toplist[i]["PRICE"] = json[i]["current_price"];
        toplist[i]["CHANGE"] = json[i]["price_change_percentage_24h"];
        toplist[i]["MARKET CAP"] = json[i]["market_cap"];
    }

    //Sort in order of price
    toplist.sort(function(a, b) {
        if (a.PRICE > b.PRICE) {
            return -1;
        }
        if (a.PRICE < b.PRICE) {
            return 1;
        }
        return 0;
    });


    const urls = ["https://www.coinbase.com/price/bitcoin",  "https://www.coinbase.com/price/ethereum",  "https://www.coinbase.com/price/tether",  "https://www.coinbase.com/price/xrp",  "https://www.coinbase.com/price/bitcoin-cash",  "https://www.coinbase.com/price/polkadot-new",  "https://www.coinbase.com/price/binance-coin",  "https://www.coinbase.com/price/chainlink",  "https://www.coinbase.com/price/crypto-com-coin",  "https://www.coinbase.com/price/litecoin",  "https://www.coinbase.com/price/bitcoin-sv",  "https://www.coinbase.com/price/cardano",  "https://www.coinbase.com/price/usdc",  "https://www.coinbase.com/price/eos",  "https://www.coinbase.com/price/tron",  "https://www.coinbase.com/price/monero",  "https://www.coinbase.com/price/tezos",  "https://www.coinbase.com/price/stellar",  "https://www.coinbase.com/price/neo",  "https://www.coinbase.com/price/unus-sed-leo",  "https://www.coinbase.com/price/huobi-token",  "https://www.coinbase.com/price/nem",  "https://www.coinbase.com/price/compound-dai",  "https://www.coinbase.com/price/cosmos",  "https://www.coinbase.com/price/vechain",  "https://www.coinbase.com/price/wrapped-bitcoin",  "https://www.coinbase.com/price/yearn-finance",  "https://www.coinbase.com/price/iota",  "https://www.coinbase.com/price/dash",  "https://www.coinbase.com/price/aave",  "https://www.coinbase.com/price/uma",  "https://www.coinbase.com/price/ethereum-classic",  "https://www.coinbase.com/price/zcash",  "https://www.coinbase.com/price/trueusd",  "https://www.coinbase.com/price/theta",  "https://www.coinbase.com/price/maker",  "https://www.coinbase.com/price/ontology",  "https://www.coinbase.com/price/binance-usd",  "https://www.coinbase.com/price/uniswap",  "https://www.coinbase.com/price/synthetix-network-token",  "https://www.coinbase.com/price/omg-network",  "https://www.coinbase.com/price/digibyte",  "https://www.coinbase.com/price/okb",  "https://www.coinbase.com/price/celo",  "https://www.coinbase.com/price/ftx-token",  "https://www.coinbase.com/price/compound",  "https://www.coinbase.com/price/dogecoin",  "https://www.coinbase.com/price/hedgetrade",  "https://www.coinbase.com/price/basic-attention-token",  "https://www.coinbase.com/price/algorand",  "https://www.coinbase.com/price/bittorrent",  "https://www.coinbase.com/price/energy-web-token",  "https://www.coinbase.com/price/kusama",  "https://www.coinbase.com/price/loopring",  "https://www.coinbase.com/price/0x",  "https://www.coinbase.com/price/paxos-standard",  "https://www.coinbase.com/price/hyperion",  "https://www.coinbase.com/price/icon",  "https://www.coinbase.com/price/waves",  "https://www.coinbase.com/price/nxm",  "https://www.coinbase.com/price/qtum",  "https://www.coinbase.com/price/kyber-network",  "https://www.coinbase.com/price/celsius",  "https://www.coinbase.com/price/ren",  "https://www.coinbase.com/price/hedera-hashgraph",  "https://www.coinbase.com/price/sushiswap",  "https://www.coinbase.com/price/abbc-coin",  "https://www.coinbase.com/price/zb-token",  "https://www.coinbase.com/price/lisk",  "https://www.coinbase.com/price/augur",  "https://www.coinbase.com/price/repv2",  "https://www.coinbase.com/price/husd",  "https://www.coinbase.com/price/zilliqa",  "https://www.coinbase.com/price/decred",  "https://www.coinbase.com/price/flexacoin",  "https://www.coinbase.com/price/bitcoin-gold",  "https://www.coinbase.com/price/ocean-protocol",  "https://www.coinbase.com/price/yearn-finance-ii",  "https://www.coinbase.com/price/reserve-rights",  "https://www.coinbase.com/price/band-protocol",  "https://www.coinbase.com/price/revain",  "https://www.coinbase.com/price/elrond-egld",  "https://www.coinbase.com/price/enjin-coin",  "https://www.coinbase.com/price/siacoin",  "https://www.coinbase.com/price/terra-luna",  "https://www.coinbase.com/price/orchid",  "https://www.coinbase.com/price/dxchain-token",  "https://www.coinbase.com/price/balancer",  "https://www.coinbase.com/price/cybervein",  "https://www.coinbase.com/price/blockstack",  "https://www.coinbase.com/price/solana",  "https://www.coinbase.com/price/aragon",  "https://www.coinbase.com/price/quant",  "https://www.coinbase.com/price/ravencoin",  "https://www.coinbase.com/price/decentraland",  "https://www.coinbase.com/price/ampleforth",  "https://www.coinbase.com/price/bitcoin-diamond",  "https://www.coinbase.com/price/nano",  "https://www.coinbase.com/price/bytom",  "https://www.coinbase.com/price/nervos-network"];
    const names = ["bitcoin", "ethereum", "tether", "ripple", "bitcoin-cash", "polkadot", "binancecoin", "chainlink", "crypto-com-chain", "litecoin", "bitcoin-cash-sv", "cardano", "usd-coin", "eos", "tron", "monero", "tezos", "stellar", "neo", "leo-token", "huobi-token", "nem", "cdai", "cosmos", "vechain", "wrapped-bitcoin", "yearn-finance", "iota", "dash", "aave-tusd", "uma", "ethereum-classic", "zcash", "true-usd", "theta-token", "maker", "ontology", "binance-usd", "uniswap", "synthetix-network-token", "omg-network", "digibyte", "okb", "celo", "ftx-token", "compound-governance-token", "dogecoin", "hedgetrade", "basic-attention-token", "algorand", "bittorrent-2", "energy-web-token", "kusama", "loopring", "0x", "paxos-standard", "hyperion", "icon", "waves", "nxm", "qtum", "kyber-network", "celsius-degree-token", "ren", "hedera-hashgraph", "sushi", "aave-usdc", "zb-token", "lisk", "augur", "repv2", "husd", "zilliqa", "decred", "flexacoin", "bitcoin-gold", "ocean-protocol", "yfii-finance", "reserve-rights-token", "band-protocol", "revain", "elrond-erd-2", "enjincoin", "siacoin", "terra-luna", "orchid", "dxchain", "balancer", "cybervein", "blockstack", "solana", "aragon", "quant-network", "ravencoin", "decentraland", "ampleforth", "bitcoin-diamond", "nano", "bytom", "nervos-network"];
    //Extract the data into right positions
    var j = 1;
    for (var i = 0; i < toplist.length; i++) {
        document.getElementById('rank' + j).innerHTML = j;
        document.getElementById('img' + j).setAttribute('src', toplist[i]["IMG"]);
        document.getElementById('img' + j).setAttribute('alt', toplist[i]["NAME"]);

        var linkIndex = names.indexOf(toplist[i]["ID"]);
        document.getElementById('a' + j).setAttribute('href', urls[linkIndex]);

        document.getElementById('name' + j).innerHTML = toplist[i]["NAME"];
        document.getElementById('price' + j).innerHTML = "$" + toplist[i]["PRICE"];

        var num = Number(toplist[i]["CHANGE"]); //price_change_percentage_24h
        var change = Math.round(num * 100) / 100;
        if (change >= 0) {
            document.getElementById('change' + j).innerHTML = "+" + change + "%";
            document.getElementById('change' + j).style.color = "#4760CC";
        } else {
            document.getElementById('change' + j).innerHTML = change + "%";
            document.getElementById('change' + j).style.color = "#eb3616";
        }

        var cap = Number(toplist[i]["MARKET CAP"]); //market_cap
        if (cap >= 1000000000) {
            var marketCap = Math.round(cap) / 1000000000; //36.875675396 B
            marketCap = Math.round(marketCap * 10) / 10; //36.9 B
            document.getElementById('marketCap' + j).innerHTML = "$" + marketCap + "B";
        } else {
            var marketCap = Math.round(cap) / 1000000;
            marketCap = Math.round(marketCap * 10) / 10;
            document.getElementById('marketCap' + j).innerHTML = "$" + marketCap + "M";
        }

        j++;
    }
}

callApi();

//document.getElementById('a' + j).setAttribute('href', "https://www.coinbase.com/price/" + toplist[i]["NAME"]);