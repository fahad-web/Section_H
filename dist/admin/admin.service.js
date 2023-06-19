"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.AdminService = void 0;
const common_1 = require("@nestjs/common");
let AdminService = exports.AdminService = class AdminService {
    regAdmin(adminRegInfo) {
        console.log(adminRegInfo);
        return ("Reg Successfully");
    }
    logAdmin(adminlogInfo) {
        console.log(adminlogInfo);
        return "Log in Successfully";
    }
    showManagerInfoId(id) {
        return ({ id: 12, name: "Fahad", Age: 22, Address: "Comilla", Number: 12456 });
    }
    showTravelerInfoId(id) {
        return ({ Id: 1, Name: " Fahad", Age: 22, Address: "Comilla", Number: 12 });
    }
    showTourGaid(id) {
        return ({ Id: 11, Name: "Fahad", Age: 23, Address: "Comilla", Number: 124588 });
    }
    delManagerById(id) {
        return "Delete Success";
    }
    modifyAdminData(modifyadmin) {
        console.log(modifyadmin);
        return "Update Success";
    }
};
exports.AdminService = AdminService = __decorate([
    (0, common_1.Injectable)()
], AdminService);
//# sourceMappingURL=admin.service.js.map